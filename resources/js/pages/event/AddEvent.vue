<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title">Tambah Acara Plugin</h4>
          <div class="row">
            <div class="col-12">
              <div class="p-2">
                <div class="form-horizontal" role="form">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="simpleinput">Nama Acara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" v-model="title" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-2">Awal Pendaftaran</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input
                          type="date"
                          class="form-control"
                          placeholder="dd/mm/yyyy"
                          v-model="opened"
                        />
                        <!-- <date-picker v-model="opened" lang="en" type="date" format="dd-MM-YYYY" class="form-control" aria-placeholder="dd-MM-YYY" ></date-picker> -->
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-2">Akhir Pendaftaran</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input
                          type="date"
                          class="form-control"
                          placeholder="dd/mm/yyyy"
                          v-model="closed"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="example-fileinput">Pamflet Acara</label>
                    <div class="col-sm-10">
                      <input
                        type="file"
                        class="form-control"
                        id="example-fileinput"
                        accept="image/*"
                        @change="onChange"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-2">Deskripsi Grup</label>
                    <div class="col-sm-10">
                      <textarea
                        v-model="description"
                        id="textarea"
                        class="form-control"
                        maxlength="225"
                        rows="3"
                        placeholder="Maksimal 255 Karakter ..."
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button @click="addCategory()" class="btn btn-primary">Tambah Kategori</button>
        </div>

        <div class="row">
          <div v-for="(cat, catIndex) in category" :key="cat.id">
            <div class="col-xl-12">
              <div class="card-box project-box">
                <button
                  @click="delCategory()"
                  class="badge btn-icon waves-effect waves-light btn-danger float-right"
                >
                  <i class="fas fa-times"></i>
                </button>
                <button
                  @click="addCategory()"
                  class="badge btn-icon waves-effect waves-light btn-primary float-right"
                >
                  <i class="fas fa-plus"></i>
                </button>
                <h4 class="mt-0 mb-3 header-title">Kategori Event</h4>
                <div role="form">
                  <div class="form-group">
                    <label for="Kategori">Pilih Kategori</label>
                    <select v-model="cat.category_id" class="form-control">
                      <option disabled selected>-- Pilih Kategori --</option>
                      <option
                        v-for="getcat in categories"
                        :key="getcat.id"
                        v-bind:value="getcat.id"
                      >{{ getcat.name }}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input
                      type="number"
                      class="form-control"
                      placeholder="Masukkan Harga"
                      v-model="cat.price"
                    />
                  </div>
                  <div class="progress progress-bar-alt-dark progress-sm">
                    <div class="progress-bar bg-dark" role="progressbar"></div>
                  </div>
                  <br />
                  <h1 class="mt-0 mb-3 header-title">Sub Kategori</h1>

                  <div
                    v-for="(sub,
                                        aIndex) in cat.sub_category"
                    :key="sub.id"
                  >
                    <div class="input-group">
                      <input
                        v-model="sub.sub_category_name"
                        type="text"
                        class="form-control"
                        placeholder="Nama Sub Kategori"
                      />
                      <input
                        v-model="sub.quota"
                        type="text"
                        class="form-control"
                        placeholder="Quota"
                      />
                      <div class="input-group-append">
                        <button
                          type="button"
                          class="btn btn-success"
                          @click="
                                                        addSubCategory(catIndex)
                                                    "
                        >
                          <i class="mdi mdi-plus"></i>
                        </button>
                        <button
                          v-show="aIndex !== 0"
                          type="button"
                          class="btn btn-danger"
                          @click="
                                                        delSubCategory(catIndex)
                                                    "
                        >
                          <i class="mdi mdi-minus"></i>
                        </button>
                      </div>
                    </div>
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button @click="postEvent()" class="btn btn-success">Simpan Acara</button>
    </div>
  </div>
</template>

<script>
import axios from "axios";
let token = localStorage.getItem("token");

export default {
  name: "AddEvent",
  data() {
    return {
      categories: [],
      title: "",
      image: "",
      opened: "",
      closed: "",
      description: "",
      category: [
        {
          category_id: "",
          price: "",
          sub_category: [
            {
              sub_category_name: "",
              quota: ""
            }
          ]
        }
      ]
    };
  },

  mounted() {
    this.getCategory();
  },

  methods: {
    addCategory() {
      this.category.push({
        category_id: "",
        price: "",
        sub_category: [
          {
            sub_category_name: "",
            quota: ""
          }
        ]
      });
    },

    delCategory() {
      this.category.splice(1);
    },
    addSubCategory(catIndex) {
      this.category[catIndex].sub_category.push({
        sub_category_name: ""
      });
    },
    delSubCategory(catIndex) {
      this.category[catIndex].sub_category.splice(catIndex, 1);
    },
    onChange(e) {
      this.image = e.target.files[0];
    },

    postEvent() {
      let event = new FormData();
      let categoriesData = JSON.stringify(this.category);
      event.append("title", this.title),
        event.append("opened", this.opened),
        event.append("closed", this.closed),
        event.append("image", this.image),
        event.append("description", this.description),
        event.append("category", categoriesData);

      axios
        .post("https://plugin-apps-server.herokuapp.com/api/event", event, {
          headers: { Authorization: `Bearer ${token}` }
        })
        // .post("http://192.168.18.53:8000/api/event", event,{headers: { Authorization: `Bearer ${token}`}})
        .then(response => {
          console.log(response.data.results);
        })
        .catch(e => {
          console.log(e);
        });
    },

    getCategory() {
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
    }
  }
};
</script>
