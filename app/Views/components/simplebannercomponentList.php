<!DOCTYPE html>
<html lang="en">

<head>
    <title>Codeigniter 4 CRUD Operation With Ajax Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/lhbxd2w69x3dawzs7zxlin9qzjsw5w4464sf9gw3lpr39pz4/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>

<body>

    <?php if(isset($validation)):?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif;?>

    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <h2>Simple Banner Component</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addModal">Add</a>
            </div>
        </div>

        <table class="table table-bordered" id="sbctable">
            <thead>
                <tr>
                    <th>Sbc Component Id</th>
                    <th>Sbc Header Text</th>
                    <th>Sbc Sub Header Text</th>
                    <th>Sbc Button Text</th>
                    <th>Sbc Background Image Path</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($simple_banner_component_details as $row){
        ?>
                <tr id="<?php echo $row['sbc_component_id']; ?>">
                    <td><?php echo $row['sbc_component_id']; ?></td>
                    <td><?php echo $row['sbc_header_text']; ?></td>
                    <td><?php echo $row['sbc_sub_header_text']; ?></td>
                    <td><?php echo $row['sbc_btn_text']; ?></td>
                    <td><?php echo $row['sbc_background_image_path']; ?></td>
                    <td>
                        <a data-id="<?php echo $row['sbc_component_id']; ?>" class="btn btn-primary btnEdit">Edit</a>
                        <a data-id="<?php echo $row['sbc_component_id']; ?>" class="btn btn-danger btnDelete">Delete</a>
                    </td>
                </tr>
                <?php
                  }
                  ?>
            </tbody>
        </table>
        <!-- Add Admin Pages Master Modal -->
        <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- User Admin Pages Master content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New SB Component</h4>
                    </div>
                    <div class="modal-body">
                        <form id="sbc" name="sbc" action="<?php echo site_url('simplebannercomponentmaster/store');?>"
                            method="post">
                            <div class="form-group">
                                <label for="sbc_header_text">SB Component Header Text</label>
                                <!--<input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> -->
                                <textarea class="tinymce" id="sbc_header_text1" name="sbc_header_text1" required>

                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: '#sbc_header_text1',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children: '+body[style],-body[div],p[strong|a|#text]',
                                    formats: {
                                        lineheight20px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight22px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight22px'
                                        },
                                        lineheight24px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight24px'
                                        },
                                        lineheight26px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight26px'
                                        },
                                        lineheight28px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight30px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight30px'
                                        },
                                        lineheight32px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight32px'
                                        },
                                        lineheight34px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight34px'
                                        },
                                        lineheight36px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight36px'
                                        },
                                        lineheight38px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight38px'
                                        },
                                        lineheight40px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight40px'
                                        }
                                    },
                                    style_formats: [{
                                            title: 'lineheight20px',
                                            format: 'lineheight20px'
                                        },
                                        {
                                            title: 'lineheight22px',
                                            format: 'lineheight22px'
                                        },
                                        {
                                            title: 'lineheight24px',
                                            format: 'lineheight24px'
                                        },
                                        {
                                            title: 'lineheight26px',
                                            format: 'lineheight26px'
                                        },
                                        {
                                            title: 'lineheight28px',
                                            format: 'lineheight28px'
                                        },
                                        {
                                            title: 'lineheight30px',
                                            format: 'lineheight30px'
                                        },
                                        {
                                            title: 'lineheight32px',
                                            format: 'lineheight32px'
                                        },
                                        {
                                            title: 'lineheight34px',
                                            format: 'lineheight34px'
                                        },
                                        {
                                            title: 'lineheight36px',
                                            format: 'lineheight36px'
                                        },
                                        {
                                            title: 'lineheight38px',
                                            format: 'lineheight38px'
                                        },
                                        {
                                            title: 'lineheight40px',
                                            format: 'lineheight40px'
                                        }
                                    ]

                                });
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sbc_sub_header_text1">SB Component Sub Header Text</label>
                                <!--<input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> -->
                                <textarea class="tinymce" id="sbc_sub_header_text1" name="sbc_sub_header_text1"
                                    required>

                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: '#sbc_sub_header_text1',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children: '+body[style],-body[div],p[strong|a|#text]',
                                    formats: {
                                        lineheight20px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight22px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight22px'
                                        },
                                        lineheight24px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight24px'
                                        },
                                        lineheight26px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight26px'
                                        },
                                        lineheight28px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight30px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight30px'
                                        },
                                        lineheight32px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight32px'
                                        },
                                        lineheight34px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight34px'
                                        },
                                        lineheight36px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight36px'
                                        },
                                        lineheight38px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight38px'
                                        },
                                        lineheight40px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight40px'
                                        }
                                    },
                                    style_formats: [{
                                            title: 'lineheight20px',
                                            format: 'lineheight20px'
                                        },
                                        {
                                            title: 'lineheight22px',
                                            format: 'lineheight22px'
                                        },
                                        {
                                            title: 'lineheight24px',
                                            format: 'lineheight24px'
                                        },
                                        {
                                            title: 'lineheight26px',
                                            format: 'lineheight26px'
                                        },
                                        {
                                            title: 'lineheight28px',
                                            format: 'lineheight28px'
                                        },
                                        {
                                            title: 'lineheight30px',
                                            format: 'lineheight30px'
                                        },
                                        {
                                            title: 'lineheight32px',
                                            format: 'lineheight32px'
                                        },
                                        {
                                            title: 'lineheight34px',
                                            format: 'lineheight34px'
                                        },
                                        {
                                            title: 'lineheight36px',
                                            format: 'lineheight36px'
                                        },
                                        {
                                            title: 'lineheight38px',
                                            format: 'lineheight38px'
                                        },
                                        {
                                            title: 'lineheight40px',
                                            format: 'lineheight40px'
                                        }
                                    ]

                                });
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sbc_btn_text">Sbc Button Text</label>
                                <input type="text" class="form-control required" id="sbc_btn_text"
                                    placeholder="Enter Button Text" name="sbc_btn_text">
                            </div>
                            <div class="form-group">
                                <label for="sbc_background_image_path">Sbc Background Image Path</label>
                                <input type="text" class="form-control required" id="sbc_background_image_path"
                                    placeholder="Enter Background Image Path" name="sbc_background_image_path">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update User Modal -->
        <div id="updateModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- User Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update SB Component</h4>
                    </div>
                    <div class="modal-body">
                        <form id="updatesbc" name="updatesbc"
                            action="<?php echo site_url('simplebannercomponentmaster/update');?>" method="post">
                            <label for="sbc_component_id">SB Component Id</label>
                            <input type="text" name="sbc_component_id" id="sbc_component_id" value="Non editable input"
                                readonly>
                            <div class="form-group">
                                <label for="sbc_header_text2">SB Component Header Text</label>
                                <!--<input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> -->
                                <textarea class="tinymce" id="sbc_header_text2" name="sbc_header_text2" required>

                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: '#sbc_header_text2',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children: '+body[style],-body[div],p[strong|a|#text]',
                                    formats: {
                                        lineheight20px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight22px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight22px'
                                        },
                                        lineheight24px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight24px'
                                        },
                                        lineheight26px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight26px'
                                        },
                                        lineheight28px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight30px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight30px'
                                        },
                                        lineheight32px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight32px'
                                        },
                                        lineheight34px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight34px'
                                        },
                                        lineheight36px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight36px'
                                        },
                                        lineheight38px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight38px'
                                        },
                                        lineheight40px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight40px'
                                        }
                                    },
                                    style_formats: [{
                                            title: 'lineheight20px',
                                            format: 'lineheight20px'
                                        },
                                        {
                                            title: 'lineheight22px',
                                            format: 'lineheight22px'
                                        },
                                        {
                                            title: 'lineheight24px',
                                            format: 'lineheight24px'
                                        },
                                        {
                                            title: 'lineheight26px',
                                            format: 'lineheight26px'
                                        },
                                        {
                                            title: 'lineheight28px',
                                            format: 'lineheight28px'
                                        },
                                        {
                                            title: 'lineheight30px',
                                            format: 'lineheight30px'
                                        },
                                        {
                                            title: 'lineheight32px',
                                            format: 'lineheight32px'
                                        },
                                        {
                                            title: 'lineheight34px',
                                            format: 'lineheight34px'
                                        },
                                        {
                                            title: 'lineheight36px',
                                            format: 'lineheight36px'
                                        },
                                        {
                                            title: 'lineheight38px',
                                            format: 'lineheight38px'
                                        },
                                        {
                                            title: 'lineheight40px',
                                            format: 'lineheight40px'
                                        }
                                    ],

                                });
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="sbc_sub_header_text2">SB Component Sub Header Text</label>
                                <!--<input type="text" class="form-control required" id="admin_page_component_data"
                                    placeholder="Enter Component Data" name="admin_page_component_data"> -->
                                <textarea class="tinymce" id="sbc_sub_header_text2" name="sbc_sub_header_text2"
                                    required>

                                </textarea>
                                <script>
                                tinymce.init({
                                    selector: '#sbc_sub_header_text2',
                                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                                    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    valid_children: '+body[style],-body[div],p[strong|a|#text]',
                                    formats: {
                                        lineheight20px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight22px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight22px'
                                        },
                                        lineheight24px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight24px'
                                        },
                                        lineheight26px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight26px'
                                        },
                                        lineheight28px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight20px'
                                        },
                                        lineheight30px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight30px'
                                        },
                                        lineheight32px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight32px'
                                        },
                                        lineheight34px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight34px'
                                        },
                                        lineheight36px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight36px'
                                        },
                                        lineheight38px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight38px'
                                        },
                                        lineheight40px: {
                                            selector: 'span,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
                                            classes: 'lineheight40px'
                                        }
                                    },
                                    style_formats: [{
                                            title: 'lineheight20px',
                                            format: 'lineheight20px'
                                        },
                                        {
                                            title: 'lineheight22px',
                                            format: 'lineheight22px'
                                        },
                                        {
                                            title: 'lineheight24px',
                                            format: 'lineheight24px'
                                        },
                                        {
                                            title: 'lineheight26px',
                                            format: 'lineheight26px'
                                        },
                                        {
                                            title: 'lineheight28px',
                                            format: 'lineheight28px'
                                        },
                                        {
                                            title: 'lineheight30px',
                                            format: 'lineheight30px'
                                        },
                                        {
                                            title: 'lineheight32px',
                                            format: 'lineheight32px'
                                        },
                                        {
                                            title: 'lineheight34px',
                                            format: 'lineheight34px'
                                        },
                                        {
                                            title: 'lineheight36px',
                                            format: 'lineheight36px'
                                        },
                                        {
                                            title: 'lineheight38px',
                                            format: 'lineheight38px'
                                        },
                                        {
                                            title: 'lineheight40px',
                                            format: 'lineheight40px'
                                        }
                                    ]

                                });
                                </script>
                            </div>

                            <div class="form-group">
                                <label for="sbc_btn_text">SB Component Button Text</label>
                                <input type="text" class="form-control required" id="sbc_btn_text"
                                    placeholder="Enter Button Text" name="sbc_btn_text">
                            </div>
                            <div class="form-group">
                                <label for="sbc_background_image_path">SB Background Image Path</label>
                                <input type="text" class="form-control required" id="sbc_background_image_path"
                                    placeholder="Enter Background Image Path" name="sbc_background_image_path">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {

            //Add the Master Page  
            $("#sbc").validate({
                rules: {
                    sbc_component_id: "required",
                },
                messages: {},
                submitHandler: function(form) {
                    var form_action = $("#sbc").attr("action");
                    $.ajax({
                        data: $('#sbc').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {

                            var sbc = '<tr id="' + res.data
                                .sbc_component_id + '">';
                            sbc += '<td>' + res.data
                                .sbc_header_text + '</td>';
                            sbc += '<td>' + res.data
                                .sbc_sub_header_text + '</td>';
                            sbc += '<td>' + res.data
                                .sbc_btn_text + '</td>';
                            sbc += '<td>' + res.data
                                .sbc_background_image_path + '</td>';
                            sbc += '<td><a data-id="' + res.data
                                .sbc_component_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.sbc_component_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            sbc += '</tr>';
                            $('#sbctable').prepend(
                                sbc);
                            $("#sbc")[0].reset();
                            $('#addModal').modal('hide');

                        },
                        error: function(data) {}
                    });
                }
            });
            //When click edit Master Page
            $('body').on('click', '.btnEdit', function() {
                var $sbc_component_id = $(this).attr('data-id');
                $.ajax({
                    url: 'simplebannercomponentmaster/edit/' + $sbc_component_id,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        $('#updateModal').modal('show');
                        $('#updatesbc #sbc_component_id').val(res.data
                            .sbc_component_id);
                        $('#updatesbc #sbc_header_text').val(res.data
                            .sbc_header_text);

                        $('#updatesbc #sbc_sub_header_text').val(res.data
                            .sbc_sub_header_text);
                        $('#updatesbc #sbc_btn_text').val(res.data
                            .sbc_btn_text);
                        $('#updatesbc #sbc_background_image_path').val(res.data
                            .sbc_background_image_path);
                        tinymce.get('sbc_header_text2').setContent(res.data
                            .sbc_header_text);
                        tinymce.get('sbc_sub_header_text2').setContent(res.data
                            .sbc_sub_header_text);

                    },

                    error: function(data) {}
                });
            });
            // Update the Master Page
            $("#updatesbc").validate({
                rules: {
                    sb_component_id: "required",
                },
                messages: {
                    Yes: "Hello",
                },
                submitHandler: function(form) {
                    var form_action = $("#updatesbc").attr("action");
                    $.ajax({
                        data: $('#updatesbc').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function(res) {
                            var sbc = '<tr id="' + res.data.sbc_component_id + '">';
                            sbc += '<td>' + res.data.sbc_component_id + '</td>';
                            sbc += '<td>' + res.data.sbc_header_text + '</td>';
                            sbc += '<td>' + res.data.sbc_sub_header_text + '</td>';
                            sbc += '<td>' + res.data.sbc_btn_text + '</td>';
                            sbc += '<td>' + res.data.sbc_background_image_path +
                                '</td>';
                            sbc += '<td><a data-id="' + res.data.sbc_component_id +
                                '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' +
                                res.data.sbc_component_id +
                                '" class="btn btn-danger btnDelete">Delete</a></td>';
                            sbc += '</tr>';
                            $('#sbc tbody ' + res.data.sbc_component_id).html(sbc);
                            $('#updateModal').modal('hide');
                            window.location.reload();
                        },
                        error: function(data) {}
                    });
                }
            });

            //delete adminPagesGrandMaster
            $('body').on('click', '.btnDelete', function() {
                var $sbc_component_id = $(this).attr('data-id');
                $.get('simplebannercomponentmaster/delete/' + $sbc_component_id, function(data) {
                    $('#sbctable tbody').remove();
                    window.location.reload();
                })
            });

        });
        </script>
    </div>

</body>

</html>