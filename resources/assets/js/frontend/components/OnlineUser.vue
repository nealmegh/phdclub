<template>
    <div class="pull-right">
        <i class="fa fa-circle green" v-if="checkUser()"></i>
        <!--<i v-else class="fa-circle red" ></i>-->
        <!--<h1 v-if="checkUser()">Yes</h1>-->
        <!--<h1 v-else>No</h1>-->
    </div>
</template>

<!--<script>-->
    <!--export default {-->
        <!--props: ['user', 'onlineusers'],-->
        <!--methods: {-->
            <!--checkUser: function(){-->
                <!--return this.onlineusers.filter(item => item.id == this.user.id).length!==0;-->
                <!--// return this.onlineusers?this.onlineusers.filter(item => item.id == this.user.id).length!==0:false;-->

            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->
<script>
    export default {
        props: ['user', 'onlineusers'],
        methods: {
            checkUser(){
                // console.log(this.onlineusers[1].id);
                // console.log(this.user);
                // return this.user;
                // let currentUser = this.user;
                // let returningUser;
                // this.onlineusers.forEach(function(arrayUser){
                //     // console.log(arrayUser.id);
                //     if(arrayUser.id === currentUser.id){
                //         console.log("returning"+currentUser.id);
                //         returningUser = currentUser;
                //     }
                // });
                //
                // if(returningUser === undefined) {
                //     return false;
                //     // returningUser = this.user;
                //     // console.log(this.user);
                // }
                // console.log(returningUser);
                // return returningUser;
                console.log( _.find(this.onlineusers ,{id: this.user.id}));
                return _.find(this.onlineusers ,{id: this.user.id});
                // return this.onlineusers[1];

            }
        }

    }
</script>

<style>

    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>