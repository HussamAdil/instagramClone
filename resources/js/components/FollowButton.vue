<template>
    <div class="container">
     <button class="ml-5 btn btn-primary" @click="FollowUser"> Follow </button> 
    </div>
</template>

<script>
    export default {
        props : ['userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {
            FollowUser()
            {
                axios.post('/follow/' + this.userId).then(response => { alert(response.data) ;});
            }
        }
    }
</script>
