

        <script src="../../js/datatables/js/jquery.dataTables.js"></script>
        <script src="../../js/datatables/tools/js/dataTables.tableTools.js"></script>
        <link href="../../css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });

                $('.enlace2').click(function(){
                  var enlace2 = $(this).attr("id");                  
                  $('.pages').load(enlace2);
                });

            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>

                <div class="">

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Servers <small>List</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                          <a class="enlace2" href="#" id="addServer"><i class="glyphicon glyphicon-plus"> </i>Add</a>
                                        </li>


                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>Name </th>
                                                <th>IP </th>
                                                <th>Type </th>
                                                <th>SO </th>
                                                <th>HDD </th>
                                                <th>RAM </th>
                                                <th>Country </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $contador=0;
                                          foreach ($servers as $value)
                                          {
                                            ?>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                                <td class=" "><?php   echo $servers[$contador]->nameServer; ?></td>
                                                <td class=" "><?php   echo $servers[$contador]->IpServer; ?></td>
                                                <td class=" "><?php   echo $servers[$contador]->typeServer; ?></i>
                                                </td>
                                                <td class=" "><?php   echo $servers[$contador]->SOServer; ?></td>
                                                <td class=" "><?php   echo $servers[$contador]->HDDServer; ?></td>
                                                <td class="a-right a-right "><?php   echo $servers[$contador]->RAMServer; ?></td>
                                                <td class="a-right a-right "><?php   echo $servers[$contador]->Country; ?></td>

                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <?php

                                            $contador++;
                                          }
                                          ?>



                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
