<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="bg-picture card-box">
          <div class="profile-info-name">
            <img
              src="avatarUrl + ${user.avatar}"
              class="rounded-circle avatar-xl img-thumbnail float-left mr-3"
              alt="profile-image"
            />
            <!-- <img v-bind:src="'user.avatar'"> -->

            <div class="profile-info-detail overflow-hidden">
              <h4 class="m-0">{{user.name}}</h4>
              <p class="text-muted">
                <i>{{user.role}}</i>
              </p>

              <dl class="row">
                <dt class="col-sm-3">Status</dt>
                <dd class="col-sm-9">
                  <select>
                    <option value="0">Aktif</option>
                    <option value="1">Tidak Aktif</option>
                  </select>
                </dd>
              </dl>

              <h4 class="header-title mb-3">Target-Target</h4>

              <blockquote class="blockquote font-16 mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  Someone famous in
                  <cite title="Source Title">Source Title</cite>
                </footer>
              </blockquote>
              <blockquote class="blockquote font-16 mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  Someone famous in
                  <cite title="Source Title">Source Title</cite>
                </footer>
              </blockquote>
              <blockquote class="blockquote font-16 mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                  Someone famous in
                  <cite title="Source Title">Source Title</cite>
                </footer>
              </blockquote>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
const token = localStorage.getItem("token");
export default {
    data(){
        return {
            user: [],
            avatarData: [],
            avatarUrl: 'https://plugin-apps-server.herokuapp.com/'
        }
    },
    mounted(){
        this.getDetail()
    },
    methods:{
        getDetail(){
        const url = `https://plugin-apps-server.herokuapp.com/api/user/${this.$route.params.member_id}`
        axios.get(url, {headers: { Authorization: `Bearer ${token}` }}).then(response => {
            this.user = response.data.results
        }).catch(error => {
            if (error.response.status == 404) {
                this.message = error.response.data.message
            }
        })
        },
        getImage(){
            avatarUrl = "https://plugin-apps-server.herokuapp.com"
        }
    }
}
</script>
