<template>
   <div>
       <div class="card" style="width: 40rem;">
            <div class="card-body">
       <form>
           <h1 class="card-title">Login</h1>
           <div class="form-group">
               <label for="email">Email- {{models.email}} {{errors.email}}</label>
               <input v-model="models.email" type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password- {{models.password}} {{errors.password}}</label>
                <input v-model="models.password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button @click.prevent="click" class="btn btn-primary" >Login</button>
        </form>
    </div>
    </div>
    </div>
</template>

<script>
export default {
    name :'Login',
     data () {
        return {
        info: null,
        models :{
            email:'',
            password:''
        },
        errors :{
            email:'',
            password:''
        },
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
            .post('/api/login',this.models)
            .then(response => 
            {
                console.log(response.data)
                this.info = response

           if(response.data.status == 'success'){
               console.log('SUCCESS')

           }
           else if(response.data.status == 'error'){
              //console.log(response.data.message)
              this.errors.email = response.data.message;
              this.errors.password = response.data.message;

           }

            }
            
            )
        }
           
       


        
    }
    
}





</script>

<style scoped>

</style>