<!--  -->


<template>
    <div class="d-flex" style=" justify-content: flex-end;">
          <button style="align-items: baseline ;border-radius:1rem; margin-left:1.5rem;" class="btn btn-dark" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        props:['userId','follows'],
        mounted() {
            console.log('Component mounted.')
        
        },

    data:function(){
        return{
            status:this.follows,
        }
    },


            methods: {
          followUser()
          {
        axios.post("/follow/"+this.userId)
            .then(response =>{
                this.status=!this.status;
                 console.log(response.data)
        }) .catch(function (error) {
   if(error.response.status==401){
    window.location='/login';

   }
  });
         }
        },
        computed:{
            buttonText(){
                return(this.status)? 'Unfollow':'Follow';
            }
        }
            }
    

</script>
