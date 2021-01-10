<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(user, k) in list_user" :key="k">
                    <td>{{ user.id }}</td>
                    <td>
                      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                          <img src="/dist/img/VueShopLogo.png" class="img-circle elevation-2" alt="User Image" />
                        </div>
                      </div>
                    </td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.birthday }}</td>
                    <td>{{ user.username }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.phone }}</td>
                    <td>
						<button class="btn btn-warning" title="">
							<i class="fas fa-edit"></i>
						</button>
						<button class="btn btn-danger">
							<i class="fas fa-trash-alt"></i>
						</button>
					</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
</template>

<script>
export default {
  	name: "ListUser",
	data() {
		return {
		list_user: [],
		errors: [],
		};
	},

	created() {
		this.getListUser()
	},

	methods: {
		getListUser() {
            axios.get('/api/get-list-user')
            .then(response => {
                this.list_user = response.data.data;
            })
            .catch(error => {
                console.log(error);
            })
        }
	}
};
</script>

<style>
	.card {
		padding: 10px;
	}

	.table td, .table th {
		vertical-align: unset !important;
	}
</style>