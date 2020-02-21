<template>
  <div>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <form>
          <h1 class="card-title">Add Blog BlogPost</h1>
          <div class="form-group">
            <label for="title">Title- {{models.title}}</label>
            <input
              v-model="models.title"
              type="text"
              class="form-control"
              id="title"
              placeholder="Enter Title"
            />
          </div>
          <div class="form-group">
            <label for="category">Category- {{models.category}}</label>
            <input
              v-model="models.category"
              type="text"
              class="form-control"
              id="category"
              placeholder="Enter Category"
            />
          </div>
          <div class="form-group">
            <label for="agegroup">Age Group- {{models.agegroup}}</label>
            <input
              v-model="models.agegroup"
              type="text"
              class="form-control"
              id="agegroup"
              placeholder="Enter Age Group"
            />
          </div>
          <div class="form-group">
            <label for="description">Description- {{models.description}}</label>
            <input
              v-model="models.description"
              type="text"
              class="form-control"
              id="description"
              placeholder="Enter Description"
            />
          </div>
          <button @click.prevent="click" class="btn btn-primary">ADD</button>
        </form>
      </div>
    </div>

    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Age Group</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      info: null,
      models: {
        email: "",
        password: ""
      }
    };
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

  methods: {
    click() {
      this.axios.post("/api/blogs", this.models).then(response => {
        console.log(response);
        this.info = response;
      });
    }
  }
};
</script>

<style scoped>
</style>