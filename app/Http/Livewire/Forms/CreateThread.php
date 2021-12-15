<?php

namespace App\Http\Livewire\Forms;

use App\Models\Thread;
use App\Models\ThreadCategory;
use App\Rules\HcaptchaSuccess;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateThread extends Component implements HasForms
{
    use InteractsWithForms;
    use WithFileUploads;

    use AuthorizesRequests;

    public string $title = "";
    public string $content = "";
    public int $thread_category_id = 2;
    public bool $agree = false;
    public string $captchaKey = "";

    protected function getFormSchema(): array
    {
        return [
            Components\TextInput::make('title')->label('Judul diskusi')
                ->required()
                ->lazy(),
            Components\Select::make('thread_category_id')->label('Kategori')
                ->options($this->getCategories())
                ->required()
                ->lazy(),
            Components\RichEditor::make('content')
                ->label('Isi diskusi')
                ->required()
                ->fileAttachmentsDisk('prod')
                ->fileAttachmentsDirectory(config('app.is_prod') ? 'forum-attachments' : 'public/forum-attachments')
                ->fileAttachmentsVisibility('public')
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'undo',
                ])
                ->helperText('Pastikan diskusi anda sudah benar, karena diskusi tidak dapat diubah setelah diposting'),
            Components\Checkbox::make('agree')
                ->label('Saya menyetujui peraturan cuber')
                ->lazy()
                ->required()
        ];
    }

    public function render()
    {
        return view('livewire.forms.create-thread');
    }

    public function getCategories()
    {
        if (auth()->user()->user_type === "ADMIN") return ThreadCategory::all()->pluck('name', 'id');
        return ThreadCategory::where('assignable', true)->get()->pluck('name', 'id');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', Thread::class);

        $this->validate([
            'captchaKey' => ['required', new HcaptchaSuccess()]
        ]);

        $thread = Thread::create(
            array_merge([
                'user_id' => \Auth::user()->id,
                'slug' => Str::threadLink($this->form->getState()['title'])
            ],
                collect($this->form->getState())->except(['agree'])->toArray())
        );

        return redirect(route('thread.show', [
                'id' => $thread->id,
                'slug' => $thread->slug
            ]) . "?sharePopup=true");
    }
}
