require('./bootstrap');
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'
import Clipboard from "@ryangjchandler/alpine-clipboard"

Alpine.plugin(persist)
Alpine.plugin(Clipboard);
Alpine.plugin(FormsAlpinePlugin)
window.Alpine = Alpine;

Alpine.start();
