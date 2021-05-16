<script>
    $(document).ready(function() {

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        


            var dataTable = $('#newsletter_list').DataTable({

                'searching': true,
                'paging': true,
                "responsive": true,
                "processing": true,
                //"serverSide": true,
                'lengthChange': true,
                //"dom": 'Bfrtip',

                "buttons": [
                    'csv', 'excel', 'pdf', 'print'
                ],

                "order": [],
                "ajax": {
                    "url": "<?php echo base_url('getnewsletterdata'); ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    targets: -1,
                    "orderable": false,
                }, ],
            });

        
        $(document).on('click', '.delete_newsletter', function() {


            if (confirm("Are you sure?")) {

                var id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() . 'newsletter_delete'?>",
                    method: "POST",
                    data: {
                        newsletter_id: id,
                        <?php echo $this->security->get_csrf_token_name(); ?>: <?php echo "'".$this->security->get_csrf_hash()."'"; ?>
                    },
                    success: function(data) {
                        if (data) {
                            toastr["success"]("News Letter Deleted Successfully!");
                            // enquiry_table.ajax.reload();
                            setTimeout(function(){ location.reload(); }, 2000);
                            //dataTable.draw();
                        } else {
                            toastr["error"]("Delete failed! Please try again.");
                            return false;
                        }
                    }
                })
            }

        });

        
            var dataTable = $('#advertise_with_us').DataTable({

                'searching': true,
                'paging': true,
                "responsive": true,
                "processing": true,
                //"serverSide": true,
                'lengthChange': true,
                //"dom": 'Bfrtip',

                "buttons": [
                    'csv', 'excel', 'pdf', 'print'
                ],

                "order": [],
                "ajax": {
                    "url": "<?php echo base_url('getadvertisedata'); ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    targets: -1,
                    "orderable": false,
                }, ],
            });

        
        $(document).on('click', '.delete_advertise_with_us', function() {


            if (confirm("Are you sure?")) {

                var id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() . 'advertise_with_us_delete'?>",
                    method: "POST",
                    data: {
                        advertise_with_us_id: id,
                        <?php echo $this->security->get_csrf_token_name(); ?>: <?php echo "'".$this->security->get_csrf_hash()."'"; ?>
                    },
                    success: function(data) {
                        if (data) {
                            toastr["success"]("Advertise With Us Deleted Successfully!");
                            // enquiry_table.ajax.reload();
                            setTimeout(function(){ location.reload(); }, 2000);
                            //dataTable.draw();
                        } else {
                            toastr["error"]("Delete failed! Please try again.");
                            return false;
                        }
                    }
                })
            }

        });

        if (($("#contact_us_info").length > 0)) {

            var dataTable = $('#contact_us_info').DataTable({

                'searching': true,
                'paging': true,
                "responsive": true,
                "processing": true,
                //"serverSide": true,
                'lengthChange': true,
                //"dom": 'Bfrtip',

                "buttons": [
                    'csv', 'excel', 'pdf', 'print'
                ],

                "order": [],
                "ajax": {
                    "url": "<?php echo base_url('getcontactusdata'); ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    targets: -1,
                    "orderable": false,
                }, ],
            });

        }
        $(document).on('click', '.delete_contact_us', function() {


            if (confirm("Are you sure?")) {

                var id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() . 'contact_us_delete'?>",
                    method: "POST",
                    data: {
                        contact_us_id: id,
                        <?php echo $this->security->get_csrf_token_name(); ?>: <?php echo "'".$this->security->get_csrf_hash()."'"; ?>
                    },
                    success: function(data) {
                        if (data) {
                            toastr["success"]("Contact Us  Deleted Successfully!");
                            // enquiry_table.ajax.reload();
                            setTimeout(function(){ location.reload(); }, 2000);
                            //dataTable.draw();
                        } else {
                            toastr["error"]("Delete failed! Please try again.");
                            return false;
                        }
                    }
                })
            }

        });
        if (($("#enquiry").length > 0)) {


            var enquiry_Table = $('#enquiry').DataTable({

                'searching': true,
                'paging': true,
                "responsive": true,
                "processing": true,
                //"serverSide": true,
                'lengthChange': true,
                //"dom": 'Bfrtip',

                "buttons": [
                    'csv', 'excel', 'pdf', 'print'
                ],

                "order": [],
                "ajax": {
                    "url": "<?php echo base_url('getenquiry'); ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    targets: -1,
                    "orderable": false,
                }, ],
            });
        }
        $(document).on('click', '.delete_enquiry', function() {


            if (confirm("Are you sure?")) {

                var id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() . 'enquiry_delete'?>",
                    method: "POST",
                    data: {
                        enquiry_id: id,
                        <?php echo $this->security->get_csrf_token_name(); ?>: <?php echo "'".$this->security->get_csrf_hash()."'"; ?>
                    },
                    success: function(data) {
                        if (data) {
                            toastr["success"]("enquiry Deleted Successfully!");
                            // enquiry_table.ajax.reload();
                            setTimeout(function(){ location.reload(); }, 2000);
                            //dataTable.draw();
                        } else {
                            toastr["error"]("Delete failed! Please try again.");
                            return false;
                        }
                    }
                })
            }

        });
                
                var dataTable = $('#careers_list').DataTable({

                'searching': true,
                'paging': true,
                "responsive": true,
                "processing": true,
                //"serverSide": true,
                'lengthChange': true,
                //"dom": 'Bfrtip',

                "buttons": [
                    'csv', 'excel', 'pdf', 'print'
                ],

                "order": [],
                "ajax": {
                    "url": "<?php echo base_url('getcareersdata'); ?>",
                    "type": "POST",
                },
                "columnDefs": [{
                    targets: -1,
                    "orderable": false,
                }, ],
            });

            $(document).on('click', '.delete_careers', function() {


            if (confirm("Are you sure?")) {

                var id = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() . 'careers_delete'?>",
                    method: "POST",
                    data: {
                        careers_id: id,
                        <?php echo $this->security->get_csrf_token_name(); ?>: <?php echo "'".$this->security->get_csrf_hash()."'"; ?>
                    },
                    success: function(data) {
                        if (data) {
                            toastr["success"]("Careers Data Deleted Successfully!");
                            // enquiry_table.ajax.reload();
                            setTimeout(function(){ location.reload(); }, 2000);
                            //dataTable.draw();
                        } else {
                            toastr["error"]("Delete failed! Please try again.");
                            return false;
                        }
                    }
                })
            }

        });


        


    });

</script>
