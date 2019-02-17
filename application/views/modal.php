    <!-- Modal -->
    <div class="modal fade" id="modal_komputer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PC dan Laptop</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <?php
                  foreach ($laptop as $l) {?>
                
                   <div style='float:left;' class='col-sm-3 text-center'><img style='width:100px;' src="<?php echo base_url("/gambar/laptop.jpg")
                            ?>" class="img-rounded img-responsive" alt="Cinque Terre"><br/><?php echo $l['nama_barang']."<br/>"; ?><button onclick='testJS()'
                            class='btn btn-info' value='computer'>Transaksi</button>
                        
                  </div>
                  <?php } ?>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    