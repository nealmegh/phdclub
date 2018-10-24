
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');
require('../plugins');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('chat', require('./components/Chat.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));
Vue.component('onlineuser', require('./components/OnlineUser.vue'));

const app = new Vue({
    el: '#app',
    data: {
        chats:'',
        onlineUsers: ''
    },
    created(){
        const fromId = $('meta[name="fromId"]').attr('content');

        const toId = $('meta[name="toId"]').attr('content');

        if(toId != undefined){

            axios.post('/chat/getChat/' + toId).then((response) => {

                this.chats = response.data;

            });

            Echo.private('Chat.' + toId + '.' + fromId)
                .listen('BroadcastChat', (e) => {
                   this.chats.push(e.chat);
                });
        }

        if(fromId != 'null'){

            Echo.join('Online')
                .here((users) => {
                    this.onlineUsers = users;
                })
                .joining((user) => {
                    this.onlineUsers.push(user);
                })
                .leaving((user) => {
                    this.onlineUsers = this.onlineUsers.filter((u) => {u != user});
                })
        }
    }
});
