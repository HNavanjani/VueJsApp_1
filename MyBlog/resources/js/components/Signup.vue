<template>
   <div>
       <div class="card" style="width: 40rem;">
            <div class="card-body">
       <form>
           <h1 class="card-title">Sign Up</h1>
            <div class="form-group">
               <label for="name">Name - {{models.name}}</label>
               <input v-model="models.name" type="text" class="form-control" id="name" placeholder="Enter User Name">
            </div>
           <div class="form-group">
               <label for="email">Email- {{models.email}}</label>
               <input v-model="models.email" type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password- {{models.password}}</label>
                <input v-model="models.password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button @click.prevent="click" class="btn btn-primary" >Sign Up</button>
        </form>
    </div>
    </div>
    </div>
</template>

<script>
export default {
    name :'Signup',
     data () {
        return {
        info: null,
        models :{
            name:'',
            email:'',
            password:''
        }
        }
    },
    beforeCreate() {
        //alert('beforeCreate');
    },
    created() {
        //alert('created');
    },
    beforeMount() {
        //alert('beforeMount');
    },
    mounted() {
        //alert('mounted');
    },
    beforeUpdate() {
        //alert('beforeUpdate');
    },
    updated() {
        //alert('updated');
    },
    beforeDestroy() {
        //alert('beforeDestroy');
    },
    destroyed() {
        //alert('destroyed');
    },
    methods :{
        click(){
            this.axios
            .post('/api/sign-up',this.models)
            .then(response => 
            {
                console.log(response)
                this.info = response
            }
            )
        }
    }
    
}





</script>

<style scoped>

</style>