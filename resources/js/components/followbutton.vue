<template>
    <div>
    <button class="btn btn-primary" @click="followUser" v-text="buttonText" ></button>
      
    </div>
</template>

<script>
    export default {
        props: ['userid','follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
                status: this.follows,
            }
        },


            
        methods: {
            followUser(){
                axios.post('/follow/'+ this.userid)
                .then(response =>{
                   console.log(response.data);
                });
                }
             }     ,
        computed: {
            buttonText(){
                return (this.status)?'UnFollow':'Follow';
            }
        }    
        
        
    }
</script>
