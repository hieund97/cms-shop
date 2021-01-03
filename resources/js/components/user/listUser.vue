<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
            <div class="card-body">
              <DataTable title="List User" :columns="tableColumns1" :rows="tableRows1" :paginate="true" :exportable="false" :printable="false"></DataTable>
            </div>
            <!-- /.card-body -->
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</template>

<script>
import DataTable from "vue-materialize-datatable";

export default {
  name: "ListUser",
  components: {
    DataTable,
  },
  data() {
    return {
      list: [],
      tableColumns1: [
        {
          label: "Character name",
          field: "charName",
          numeric: false,
          html: true,
        },
        {
          label: "First appearance",
          field: "firstAppearance",
          numeric: false,
          html: false,
        },
        {
          label: "Created by",
          field: "createdBy",
          numeric: false,
          html: false,
        },
        {
          label: "Voiced by",
          field: "voicedBy",
          numeric: false,
          html: false,
        },
      ],
      tableRows1: [
        {
          charName: "<h1>test</h1>",
          firstAppearance: "Alladin (1992)",
          createdBy: "Joe Grant",
          voicedBy: "Frank Welker",
        },
        {
          charName: "Magic Carpet",
          firstAppearance: "Peter (1994)",
          createdBy: "Randy Cartwright",
          voicedBy: "N/A",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },

        {
          charName: "The Sultan",
          firstAppearance: "John (1995)",
          createdBy: "Navid Negahban",
          voicedBy: "Douglas Seale",
        },
      ],
    };
  },
};
</script>

<style>
</style>