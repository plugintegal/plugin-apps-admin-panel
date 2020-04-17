<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <table id="datatable" class="table table-bordered dt-responsive nowrap">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>No. Hp</th>
                <th>Kehadiran</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="(participant, no) in participants" :key="participant.id">
                <td>{{no+1}}</td>
                <td>{{participant.full_name}}</td>
                <td>{{participant.email}}</td>
                <td>{{participant.phone}}</td>
                <td>
                  <span class="badge badge-warning">Belum Hadir</span>
                </td>
                <td>
                  <span class="badge badge-danger">Belum Lunas</span>
                </td>
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
import axios from 'axios'
let token = localStorage.getItem("token")

export default {
  name: "ParticipantEvent",
  data() {
    return {
      participants: [],
      status: ""
    };
  },
  mounted(){
    this.getPerticipant()
  },
  methods: {
    getPerticipant(){
      axios.get("https://plugin-apps-server.herokuapp.com/api/participant", {
        headers: {
          Authorization: `Bearer ${token}`
        }
      })
      .then(response => {
        this.participants = response.data.results
      })
      .catch(e => {
        console.log(e);
      })
    }
  }
};
</script>
