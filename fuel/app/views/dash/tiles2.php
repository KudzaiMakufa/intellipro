
<style>
    .statis .box {
  position: relative;
  padding: 15px;
  overflow: hidden;
  border-radius: 3px;
  margin-bottom: 25px;
}
.statis .box h3:after {
  content: "";
  height: 2px;
  width: 70%;
  margin: auto;
  background-color: rgba(255, 255, 255, 0.12);
  display: block;
  margin-top: 10px;
}
.statis .box i {
  position: absolute;
  height: 70px;
  width: 70px;
  font-size: 22px;
  padding: 15px;
  top: -25px;
  left: -25px;
  background-color: rgba(255, 255, 255, 0.15);
  line-height: 60px;
  text-align: right;
  border-radius: 50%;
}
</style>
<section class='statis text-center'>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="box bg-primary">
                  <i class="fa fa-eye"></i>
                  <h3><?php 
                	 $sql = "select count(*) as rcrds from projects ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>
                  <p class="lead">Past and Current Projects</p>
                  <a href="<?php echo Uri::base().'project' ; ?>" style="color: white ; ">More info <i></i></a>
                </div>
              </div>

              <div class="col-md-3">
                <div class="box bg-primary">
                <i class="fa fa-eye"></i>
                  <h3><?php 
                	 $sql = "select count(*) as rcrds from tasks ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>
                  <p class="lead"> Project Activites & Tasks</p>
                  <a href="<?php echo Uri::base().'task' ; ?>" style="color: white ; ">More info <i></i></a>
                </div>
              </div>

              <div class="col-md-3">
                <div class="box bg-primary">
                <i class="fa fa-eye"></i>
                  <h3><?php 
                	 $sql = "select count(*) as rcrds from userprofiles ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>
                  <p class="lead">Project Team & Stakeholders</p>
                  <a href="<?php echo Uri::base().'userprofile' ; ?>" style="color: white ; ">More info <i></i></a>
                </div>
              </div>


              <div class="col-md-3">
                <div class="box bg-primary">
                <i class="fa fa-eye"></i>
                  <h3><?php 
                	 $sql = "select count(module) as total from patterns ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['total'] ;

                                            echo $rcds;

                ?></h3>
                  <p class="lead">Total Recurring issues Identified</p>
                  <a href="<?php echo Uri::base().'pattern' ; ?>" style="color: white ; ">More info <i></i></a>
                </div>
              </div>


            </div>
          </div>
        </section>