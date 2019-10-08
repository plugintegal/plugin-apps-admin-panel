<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box table-responsive">
          <h4 class="mt-0 header-title">Responsive example</h4>
          <p class="text-muted font-14 mb-3">
            <a
              href="#custom-modal"
              class="btn btn-primary btn-sm waves-effect"
              data-animation="fadein"
              data-plugin="custommodal"
              data-overlay-color="#36404a"
            >Tambah Aggota</a>
          </p>

          <table
            id="responsive-datatable"
            class="table table-bordered table-bordered dt-responsive nowrap"
          >
            <thead>
              <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Pilihan</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="user of users" v-bind:key="user.member_id">
                <td>{{user.member_id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.role}}</td>
                <td>{{user.status}}</td>
                <td>Detail</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div id="custom-modal" class="modal-demo">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <h4 class="custom-modal-title">Tambah Anggota</h4>
      <!-- <div
        class="custom-modal-text"
      >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
      </div>-->
      <div class="col-md-13">
        <div class="card-box">
          <form role="form">
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input
                type="text"
                class="form-control"
                id="name"
                aria-describedby="namalengkap"
                placeholder="Masukkan Nama Lengkap"
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan Email" />
            </div>
            <div class="form-group">
              <label for="role">Kedudukan</label>
              <select class="form-control">
                <option>--- Pilih Kedudukan</option>
                <option value="admin">Administrator</option>
                <option value="bendahara">Bendahara</option>
                <option value="anggota">Amggota</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary ">Tambah Anggota Baru</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
// import $axios from "../../api.js";
export default {
  name: "app",
  data() {
    return {
      users: []
    };
  },
  mounted() {
    console.log("Berhasil tampil");
  },
  //   created() {
  //       this.$axios
  //         .get("users")
  //         .then(response => {
  //           this.results = response.results;
  //           console.log(response.results);
  //         })
  //         .catch(e => {
  //           console.error(e);
  //         });
  //     },
  created() {
    axios
      .get("https://plugin-apps-server.herokuapp.com/api/users")
      .then(response => {
        this.users = response.data.results;
      })
      .catch(e => {
        console.error(e);
      });
  },
  methods: {}
};
</script>
