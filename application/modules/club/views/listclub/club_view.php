                    <?php //print_r($response['data'][0]); ?>
                    <div class="page-header no-gutters">
                        <div class="row align-items-md-center">
                            <div class="col-md-6">
                                <div class="media m-v-10">
                                    <div class="avatar avatar-cyan avatar-icon avatar-square">
                                        <i class="anticon anticon-star"></i>
                                    </div>
                                    <div class="media-body m-l-15">
                                        <h3 class="mb-0">มีชุมนุมทั้งหมด <?= count($response['data']); ?>  ชุมนุม </h3>
                                        <span class="text-gray font-size-13">ชุมนุม ม.<?= $response['class']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <!-- Card View -->
                            <div class="row" id="card-view">
                                <?php foreach($response['data'] as $key => $value): ?>
                                    <?php  //print_r($value); ?>
                                    <?php if ($value['clubstatus'] == 1) :?>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="m-t-20 text-center">
                                                <h4 class="m-t-30"><?= $value['clubname'] ?></h4>
                                                <p><?= $value['clubteacher'] ?></p>
                                            </div>
                                            <div class="text-center m-t-15">
                                                <p>กลุ่มสาระ : <?= $value['clubsubject'] ?></p>
                                                <p>จำนวนที่รับ : <?= $value['clubamount'] ?></p>
                                            </div>
                                            <div class="text-center m-t-30">
                                                <a href="<?php echo BURL . 'club/detail/' . $value['clubcode']; ?>" class="btn btn-primary btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">รายละเอียด</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        </div>
                    </div>
                    
                <!-- </div> -->