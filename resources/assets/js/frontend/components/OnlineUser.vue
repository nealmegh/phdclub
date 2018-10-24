<template>
    <div class="pull-right">
        <!--<i class="fa fa-circle green" v-if="checkUser()"></i>-->
        <!--<i class="fa fa-circle red" v-else></i>-->
    </div>
</template>

<script>
    export default {
        props: ['user', 'onlineusers'],
        methods: {
            checkUser: function(){
                // return this.onlineusers.filter(item => item.id == this.user.id).length!==0;
                return this.onlineusers?this.onlineusers.filter(item => item.id == this.user.id).length!==0:false;

            }
        }
    }
</script>
<!--<script>-->
    <!--export default {-->
        <!--props: ['user', 'onlineusers'],-->
        <!--computed: {-->
            <!--checkUser(){-->
                <!--return _.find(this.onlineusers ,{id: this.user.id});-->
            <!--}-->
        <!--}-->

    <!--}-->
<!--</script>-->

<style>

    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>