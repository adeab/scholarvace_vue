<template>
    <section id="main_page" class="">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="d-flex border p-3 mb-2 justify-content-between">

                <div class="">
                    <form class="navbar-form form-inline m-0">
                    <div class="input-group search-box">
                        <input type="text" id="search_notice" class="form-control" placeholder="Search...">
                        <span class="input-group-addon"><i class="material-icons" style="font-size: 22px;"></i></span>
                    </div>
                    </form>
                </div>
                <div class="">
                    <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ALL BLOG
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>

                    </div>
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal" onclick=
                    "
                    (function()
                    {
                        document.getElementById('form').reset();
                        return false;
                    })();return false;
                    ">Create New</button>
                    </div>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 main_left  ">

                <div class="border p-2 mb-2">
                <div class="first_news_upload_mid p-2">
                    <img src="img/jacqueline-kelly-PeUJyoylfe4-unsplash.png" class="img-fluid" alt="">
                    <div class="d-flex py-2">
                    <div class="p-1 blog_icon ml-0">
                        <i class="fa fa-calendar"></i> 01 JAN 2020
                    </div>
                    <div class="p-1 blog_icon">
                        <i class="fa fa-user"></i> JOIN WEEK
                    </div>
                    <div class="p-1 blog_icon">
                        <i class="fa fa-comment"></i> 0 COMMENT
                    </div>
                    </div>
                    <div class="first_news_upload_top py-2">
                    <div class="news_two flex-fill align-self-center">
                        <h5>Bangladesh University of Professional</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eos consectetur magnam eveniet culpa cupiditate error, perspiciatis temporibus animi. A? </p>
                    </div>
                    <a href="blog_details.html"><button type="button" class="btn btn-outline-secondary px-4">READ MORE</button></a>
                    </div>
                </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 main_right">
                <div class="news_right_slider border">
                <h6 class="text-center bg_active p-2">Categories</h6>
                <div class="d-flex flex-column ">
                    <div class="p-3 border-bottom p_14"> <i class="fa fa-caret-right"></i> Education</div>
                    <div class="p-3 border-bottom p_14"> <i class="fa fa-caret-right"></i> Graduation</div>
                    <div class="p-3 border-bottom p_14"> <i class="fa fa-caret-right"></i> Learning</div>
                    <div class="p-3 border-bottom p_14"> <i class="fa fa-caret-right"></i> Photography</div>
                </div>

                </div>
                <div class="news_right_trend border mt-4">
                <h6 class="text-center bg_active p-2">Trending Post</h6>
                <div class="border-bottom m-2">
                    <div class="d-flex">
                    <div class="p-2">
                        <img src="img/photo-of-person-writing-on-notebook-3184666@2x.png" class="img-fluid" alt="">
                    </div>
                    <div class="pt-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.
                        <span class="comment_like">Read More <i class="fa fa-long-arrow-right"></i></span>
                        </p>
                    </div>
                    </div>
                </div>
                <div class="border-bottom m-2">

                    <div class="d-flex">
                    <div class="p-2">
                        <img src="img/orange-and-green-pen-on-graphing-notepad-131979@2x.png" class="img-fluid" alt="">
                    </div>
                    <div class="pt-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.
                        <span class="comment_like">Read More <i class="fa fa-long-arrow-right"></i></span>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="news_right_trend border mt-4">
                <h6 class="text-center bg_active p-2">Trending Post</h6>
                <div class="d-flex flex-wrap mt-4 btm_menu">

                    <div class="m-2">
                    <button type="button" class="btn btn_poular_tag">BBA</button>
                    </div>
                    <div class="m-2">
                        <button type="button" class="btn btn_poular_tag">MBA</button>
                    </div>
                    <div class="m-2">
                    <button type="button" class="btn btn_poular_tag">UNIVERSITY</button>
                    </div>
                    <div class="m-2">
                    <button type="button" class="btn btn_poular_tag">CARRER</button>
                    </div>
                    <div class="m-2">
                    <button type="button" class="btn btn_poular_tag">INNOVATIO</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Blog</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="form" @submit="submited" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" placeholder="" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Body:</label>
                <textarea class="form-control" name="body" required></textarea>
            </div>
            <div class="form-group">
                <label>Photo/Video:</label>
                <input type="file" id="files" ref="files" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>

    </section>
</template>

<style>
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
    margin-left: -35%;
}

.modal-dialog {
    position: absolute !important;
    right: 8px;
    top: 78px;
    margin: 0!important;
    width: 550px;
}
</style>

<script>  
    export default {
        mounted() 
        {
            this.get_all_record();
        },
        methods: 
        {
            get_all_record()
            {
                $.ajax(
                {
                    url: "all_blog",
                    method: "GET",
                    data: {},
                    success: function(res)
                    {
                        console.log(res);
                    },
                    error: function(err)
                    {
                        console.log(err);
                    }
                })
            },
            submited(e)
            {
                e.preventDefault();

                let formData = new FormData();

                formData.append("title",$("input[name=title]").val());
                formData.append("body",$("textarea[name=body]").val());
                formData.append("file", document.getElementById("files").files[0]);

                axios.post( '/new_blog_store',
                formData,
                {
                    headers: 
                    {
                        'Content-Type': 'multipart/form-data'
                    }
                }
                )
                .then(function(res)
                {
                    $("#myModal").modal('hide');
                    document.getElementById("form").reset();
                    setTimeout(function(){ alert(res.data); }, 500);
                })
                .catch(function(err)
                {
                    console.log('FAILURE!!');
                    console.log(err);
                });
            }
        }
    }
</script>
