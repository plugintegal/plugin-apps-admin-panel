<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box table-responsive">
          <h4 class="mt-0 header-title">Responsive example</h4>
          <h4 v-bind="modalShow">{{modalShow}}</h4>
          <p class="text-muted font-14 mb-3">
            <a
              href="#users"
              class="btn btn-primary btn-sm waves-effect"
              data-animation="fadein"
              data-plugin="custommodal"
              data-overlay-color="#36404a"
              @click="showModal = true"
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
                <td>
                  <span v-if="user.status = 'aktif'" class="badge badge-success">Aktif</span>
                  <span v-else class="badge badge-danger">Tidak Aktif</span>
                </td>
                <td>
                  <router-link
                    :to="{name: 'detailMember', params: {member_id: user.member_id}}"
                  >Detail</router-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="users" class="modal-demo" data-animation="fadein">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <h4 class="custom-modal-title">Tambah Anggota</h4>
      <div class="col-md-13">
        <div class="card-box">
          <form role="form">
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input
                v-model="postName"
                type="text"
                class="form-control"
                id="name"
                aria-describedby="namalengkap"
                placeholder="Masukkan Nama Lengkap"
                autofocus
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                v-model="postEmail"
                type="email"
                class="form-control"
                id="email"
                placeholder="Masukkan Email"
              />
            </div>
            <div class="form-group">
              <label for="role">Kedudukan</label>
              <select v-model="postRole" class="form-control">
                <option>--- Pilih Kedudukan</option>
                <option value="admin">Administrator</option>
                <option value="bendahara">Bendahara</option>
                <option value="anggota">Anggota</option>
              </select>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Tambah Anggota Baru</button> -->
            <input
              class="btn btn-primary"
              type="button"
              @click="createPost()"
              value="Tambah Anggota Baru"
            />
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "app",
  data() {
    return {
      postName: null,
      postEmail: null,
      postRole: null,
      register: [],
      users: []
    };
  },
  mounted() {
    console.log("Berhasil tampil");
    this.created();
  },
  methods: {
    created() {
      axios
        .get("https://plugin-apps-server.herokuapp.com/api/users")
        .then(response => {
          this.users = response.data.results;
          // this.modalShow = true;
        })
        .catch(e => {
          console.error(e);
        });
    },
    createPost() {
      axios
        .post("https://plugin-apps-server.herokuapp.com/api/register", {
          name: this.postName,
          email: this.postEmail,
          role: this.postRole
        })
        .then(response => {
          this.users = Custombox.modal.close();
          Swal.fire("Anggota Berhasil Ditambah Lurd!");
          this.created();
        })
        .catch(e => {
          console.error(e);
        });
    }
  }
};
</script>
