<template>
    <div class="authentication-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="#"><i class="fas fa-home h2 text-dark"></i></a>
        </div>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html">
                                <span
                                    ><img
                                        src="assets/images/logo-dark.png"
                                        alt=""
                                        height="22"
                                /></span>
                            </a>
                            <p class="text-muted mt-2 mb-4">
                                Responsive Admin Dashboard
                            </p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Sign In</h4>
                                </div>

                                <form @submit.prevent="login">
                                    <div class="form-group mb-3">
                                        <label for="member_id"
                                            >Member ID</label
                                        >
                                        <input
                                            v-model="member_id"
                                            class="form-control"
                                            type="text"
                                            id="member_id"
                                            required
                                            placeholder="Masukkan Member ID"
                                            autofocus
                                        />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input
                                            v-model="password"
                                            class="form-control"
                                            type="password"
                                            required=""
                                            id="password"
                                            placeholder="Enter your password"
                                        />
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button
                                            class="btn btn-primary btn-block"
                                            type="submit"
                                        >
                                            Log In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            member_id : "",
            password : ""
        }
    },
    methods : {
        login : function() {
            let member_id = this.member_id;
            let password = this.password;
            this.$store
                .dispatch("login", { member_id, password })
                .then(() => this.$router.replace({name: 'home', force: true}))
        }
    }
};
</script>
