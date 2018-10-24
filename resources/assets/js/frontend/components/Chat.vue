<style scoped>

    .panel-block{
        flex-direction: column;
        border: none;
    }
    .chat {
        width: 100%;
        padding: 20px;
        box-shadow: inset 0 0 20px 0 grey;
        margin-bottom: 20px;
        border: 1px solid grey;
        max-height: 600px;
        overflow-x: auto;
    }

    .chat .chat-right, .chat .chat-left{
        max-width: 45%;
        box-shadow: 0 0 8px 0 grey;
        padding: 8px;
        margin: 4px;
        display:block;

    }
    .chat-wrap {
        width:100%;
        display:inline-block;
    }
    .chat-right{
         float: right;
        background: #dafca5;
    ;
     }
    .chat-left{
        float: left;
        background: #dedefc;
    }

    .no-message{
        height: 100px;
        display: flex;
        align-items: center;
        padding:0 15px;
    }
    .no-message p {
        display: block;
        text-align: center;
        width: 100%;
        font-weight:bold;
    }
</style>

<template>
    <div class="panel-block">
         <div class="chat" v-if="chats.length != 0" style="overflow: auto">
                <div class="chat-wrap" v-for="chat in chats">
                    <div class="chat-right" v-if="chat.from_id == fromid">
                        {{ chat.chat}}
                        <br>
                    </div>
                    <div class="chat-left" v-else>
                         {{ chat.chat}}
                    </div>

                </div>
         </div>
        <div v-else class="no-message">
            <p>There are no Messages</p>
        </div>
        <chat-composer v-bind:fromid="fromid" v-bind:toid="toid" v-bind:chats="chats"></chat-composer>
    </div>
</template>

<script>
    export default {
        props: ['chats', 'fromid', 'toid']
    }
</script>
