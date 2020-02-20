<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h3>Daftar Event</h3>
          <table id="datatable" class="table table-bordered dt-responsive nowrap">
            <thead>
              <tr>
                <th>Nama Event</th>
                <th>Awal Pendaftaran</th>
                <th>Akhir Pendaftaran</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-icon waves-effect waves-light btn-warning">
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
  </div>
</template>

<script>
export default {
  name: "Events",
  data() {
    return {
      event: [{ category_events: [{ sub_category_events: [] }] }]
    };
  },
  mounted() {
      console.log(this.test())
  },
  methods: {
      test(){
          hasil: this.event
      }
  }
};
</script>
