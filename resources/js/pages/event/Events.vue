<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h3>Daftar Event</h3>
          <table id="datatable" class="table table-bordered dt-responsive nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Awal Pendaftaran</th>
                <th>Akhir Pendaftaran</th>
                <th align="center">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="(event, no) in events" :key="event.id" >
                <td>{{ no+1 }}</td>
                <td>{{ event.title }}</td>
                <td>{{ event.opened }}</td>
                <td>{{ event.closed }}</td>
                <td>
                  <!-- <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a> -->
                  <router-link :to="{name: 'detailEvent', params: {id: event.id}}" >Detail</router-link>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                  <a href="/event/participant" class="btn btn-icon waves-effect waves-light btn-primary">
                    <i class="fas fa-users"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
let token = localStorage.getItem("token");

export default {
  name: "Events",
  data() {
    return {
      events: []
    };
  },
  mounted() {
    this.getEvent();
  },
  methods: {
    getEvent() {
      axios
        .get("https://plugin-apps-server.herokuapp.com/api/event", {
          headers: {
            Authorization: `Bearer ${token}`
          }
        })
        .then(response => {
          this.events = response.data.results;
        })
        .catch(e => {
          console.log(e);
        });
    }
  }
};
</script>
