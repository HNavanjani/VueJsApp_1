<template>
   <div>
       <div class="card" style="width: 40rem;">
            <div class="card-body">
       <form>
           <h1 class="card-title">Login</h1>
           <div class="form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
        info: null
        }
    },
    beforeCreate() {
        alert('beforeCreate');
    },
    created() {
        alert('created');
    },
    beforeMount() {
        alert('beforeMount');
    },
    mounted() {
        alert('mounted');
    },
    beforeUpdate() {
        alert('beforeUpdate');
    },
    updated() {
        alert('updated');
    },
    beforeDestroy() {
        alert('beforeDestroy');
    },
    destroyed() {
        alert('destroyed');
    }
    
}

</script>

<style scoped>

</style>