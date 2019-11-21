<template>
  <div class="account-pages mt-5 mb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="text-center">
            <a href="index.html">
              <span>
                <router-link :to="{ name: 'home' }">
                  <img src="assets/images/logo-dark.png" alt height="22" />
                </router-link>
              </span>
            </a>
            <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
          </div>
          <div class="card">
            <div class="card-body p-4">
              <div class="text-center mb-4">
                <h4 class="text-uppercase mt-0">Sign In</h4>
              </div>

              <form action="#">
                <div class="form-group mb-3">
                  <label for="emailaddress">Email address</label>
                  <input
                    class="form-control"
                    v-model="data.member_id"
                    type="text"
                    id="member_id"
                    autofocus
                    required
                    placeholder="Masukkan ID Member"
                  />
                </div>

                <div class="form-group mb-3">
                  <label for="password">Password</label>
                  <input
                    class="form-control"
                    v-model="data.password"
                    type="password"
                    required
                    id="password"
                    placeholder="Enter your password"
                  />
                </div>

                <div class="form-group mb-3">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="checkbox-signin"
                      checked
                    />
                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                  </div>
                </div>

                <div class="form-group mb-0 text-center">
                  <button class="btn btn-primary btn-block" type="submit" @click.prevent="postLogin">Log In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapMutations, mapGetters, mapState } from "vuex";
export default {
  data() {
    return {
      data: {
        member_id: "",
        password: "",
        status: []
      }
    };
  },

  created() {
    if (this.isAuth) {
      this.$router.push({ name: "home" });
    }
  },

  computed: {
    ...mapGetters(["isAuth"]),
    ...mapState(["errors"])
  },

  methods: {
    ...mapActions("auth", ["submit"]),
    ...mapMutations(["CLEAR_ERRORS"]),

    postLogin() {
      this.submit(this.data).then(() => {
        if (this.isAuth) {
          this.CLEAR_ERRORS();

          this.$router.push({ name: "home" });
        }
      });
    }
  }
};
</script>
