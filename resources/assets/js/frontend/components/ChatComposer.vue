<template lang="html">
    <div class="panel-block field">

<div class="container">
    <div class="row">
        <div class="col-md-11 col-sm-11 col-xs-12">
            <div class="control">
                <input type="text" placeholder="Type your text here" class="input col-md-12" v-on:keyup.enter="sendChat" v-model="chat">
            </div>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-12">
            <div class="control auto-width">
                <input type="button" class="button pull-right" value="Send" v-on:click="sendChat">
            </div>
        </div>
    </div>
</div>


    </div>

</template>


<script>
    export default {
        props: ['chats', 'fromid', 'toid'],
        data(){
            return{
                chat: ''
            }
        },
        methods: {
            sendChat: function(e) {
                if (this.chat != ''){
                    var data = {
                        chat: this.chat,
                        from_id: this.fromid,
                        to_id:  this.toid,
                    }
                    this.chat = '';
                    axios.post('/chat/sendChat', data).then((response) => {

                        this.chats.push(data)
                    })
                }
            }
        }
    }

</script>

<style >

    .panel-block{
        flex-direction: row;
        width: 100%;
        border: none;
    }
    input{
        border-radius: 0;
    }
    .auto-width{
        width: auto;
    }
</style>