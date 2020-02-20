<!-- <div class="form-group row">
                                            <label
                                                class="control-label col-sm-2"
                                                >Awal Pendaftaran</label
                                            >
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="mm/dd/yyyy"
                                                        id="datepicker-autoclose"
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <span
                                                            class="input-group-text"
                                                            ><i
                                                                class="ti-calendar"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="control-label col-sm-2"
                                                >Akhir Pendaftaran</label
                                            >
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="mm/dd/yyyy"
                                                        id="datepicker-autoclose1"
                                                    />
                                                    <div
                                                        class="input-group-append"
                                                    >
                                                        <span
                                                            class="input-group-text"
                                                            ><i
                                                                class="ti-calendar"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2  col-form-label"
                                                for="example-fileinput"
                                                >Pamflet Acara</label
                                            >
                                            <div class="col-sm-10">
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    id="example-fileinput"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="control-label col-sm-2"
                                                >Deskripsi Grup</label
                                            >
                                            <div class="col-sm-10">
                                                <textarea
                                                    id="textarea"
                                                    class="form-control"
                                                    maxlength="225"
                                                    rows="3"
                                                    placeholder="Maksimal 255 Karakter ..."
                                                ></textarea>
                                            </div>
                    </div>-->


<div class="card-box">
                            <h4 class="m-t-0 header-title">
                                Kategori Acara Plugin
                            </h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <div
                                            class="form-horizontal"
                                            role="form"
                                        >
                                            <div class="form-group row">
                                                <label
                                                    class="col-sm-2 col-form-label"
                                                    for="simpleinput"
                                                    >Pilih Kategori</label
                                                >
                                                <div class="col-sm-10">
                                                    <select
                                                        class="form-control"
                                                        v-model="
                                                            cat.category_id
                                                        "
                                                    >
                                                        <option
                                                            disabled
                                                            selected
                                                            >-- Pilih Kategori
                                                            --</option
                                                        >
                                                        <option
                                                            v-for="getCat in categories"
                                                            :key="getCat.id"
                                                            v-bind:value="
                                                                getCat.id
                                                            "
                                                            >{{
                                                                getCat.name
                                                            }}</option
                                                        >
                                                    </select>
                                                    <!-- <span>{{cat.category_id}}</span> -->
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label
                                                    class="col-sm-2 col-form-label"
                                                    for="simpleinput"
                                                    >Harga</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        v-model="
                                                            cat.price
                                                        "
                                                        type="number"
                                                        class="form-control"
                                                    />
                                                </div>
                                            </div> -->
                                            <button
                                                @click="delCategory(evIndex)"
                                                class="btn btn-danger"
                                            >
                                                Hapus Kategori Acara
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


<div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <div class="card-box">
                                        <h4 class="m-t-0 header-title">
                                            Sub Kategori
                                        </h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="p-2">
                                                    <div
                                                        class="form-horizontal"
                                                        role="form"
                                                    >
                                                        <div
                                                            class="form-group row"
                                                        >
                                                            <label
                                                                class="col-sm-2 col-form-label"
                                                                for="simpleinput"
                                                                >Nama Sub</label
                                                            >
                                                            <div
                                                                class="col-sm-10"
                                                            >
                                                                <input
                                                                    v-model="
                                                                        sub.sub_category_name
                                                                    "
                                                                    type="text"
                                                                    class="form-control"
                                                                />
                                                            </div>
                                                        </div>
                                                        <button
                                                            v-show="exIndex"
                                                            @click="
                                                                delSubCategory(
                                                                    evIndex,
                                                                    catIndex
                                                                )
                                                            "
                                                            class="btn btn-danger"
                                                        >
                                                            Hapus Sub Kategori
                                                        </button>
                                                        <button
                                                            @click="
                                                                addSubCategories(
                                                                    evIndex,
                                                                    catIndex
                                                                )
                                                            "
                                                            class="btn btn-primary"
                                                        >
                                                            Tambah Sub Kategori
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


<div
                        v-for="(cat, catIndex) in event.category"
                        :key="cat.id"
                    >

                        <!-- Kategori -->

                        <div
                            v-for="(sub, exIndex) in cat.sub_category"
                            :key="sub.id"
                        >

                            <!-- Sub Kategori -->


                        </div>
                    </div>
