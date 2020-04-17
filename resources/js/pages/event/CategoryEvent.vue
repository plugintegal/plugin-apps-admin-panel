<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h2 class="m-t-0 header-title">Tambah Kategori Event</h2>
          <div class="row">
            <div class="col-12">
              <div class="p-2">
                <form class="form-horizontal" role="form">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="simpleinput">Nama Kategori</label>
                    <div class="col-sm-10">
                      <input
                        type="text"
                        v-model="postName"
                        id="name"
                        class="form-control"
                        placeholder="Masukkan Kategori"
                        autofocus required
                      />
                    </div>
                  </div>

                  <input
                    type="button"
                    @click="postCategory()"
                    class="btn btn-bordred-success waves-effect width-md waves-light justify-content-center"
                    value="Tambah Kategori"
                  />
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card-box">
          <h2 class="m-t-0 header-title">Daftar Kategori Event</h2>
          <table id="datatable" class="table table-bordered dt-responsive nowrap">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="(category, no) in categories" :key="category.id">
                <td>{{ no+1 }}</td>
                <td>{{ category.name }}</td>
                <td>
                  <a
                    href="#edit"
                    data-animation="fadein"
                    data-plugin="custommodal"
                    data-overlay-color="#36404a"
                    @click="showModal = true"
                    class="btn btn-icon waves-effect waves-light btn-warning"
                  >
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="edit" class="modal-demo" data-animation="fadein">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <h4 class="custom-modal-title">Edit Status</h4>
      <div class="col-md-13">
        <div class="card-box">
          <form role="form">
            <div class="form-group">
              <label for="role">Pilih Status Pembayaran</label>
              <select class="form-control">
                <option>--- Pilih Status</option>
                <option value="1">Lunas</option>
                <option value="0">Belum Lunas</option>
              </select>
            </div>
            <input class="btn btn-primary" type="button" value="Perbaharui Status" />
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </div>
</template>
<script>
import axios from "axios";
let token = localStorage.getItem("token");

export default {
  name: "CategoryEvent",
  data() {
    return {
      no: 0,
      postName: null,
      categories: []
    };
  },
  mounted() {
    this.created();
  },
  methods: {
    created() {
      axios
        .get("https://plugin-apps-server.herokuapp.com/api/category", {
          headers: {
            Authorization: `Bearer ${token}`
          }
        })
        .then(response => {
          this.categories = response.data.results;
        })
        .catch(e => {
          console.log(e);
        });
    },

    async createMyCategory() {
      const data = { name: this.postName };
      await fetch("https://plugin-apps-server.herokuapp.com/api/category", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${token}`,
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(data => {
          Swal.fire("Kategori Berhasil Ditambah Lurd!");
          this.created();
          console.log(data);
        })
        .catch(error => console.log(error));
    },
    postCategory(){
        const data = JSON.stringify({ name: this.postName })

        axios.post("https://plugin-apps-server.herokuapp.com/api/category", data, {
            headers: { Authorization: `Bearer ${token}` }
        }).then(response => {
            console.log(response.data.results);
        }).catch(e => {
            console.log(e);
        })
    }
  }
};
</script>
