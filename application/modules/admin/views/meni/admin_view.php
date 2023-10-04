<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class=".card-group">
        <div class="row">

            <div class="col-lg-4 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account font-20 text-info"></i>
                                <p class="font-16 m-b-5">สมาชิกทั้งหมด</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_member'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account-plus font-20 text-info"></i>
                                <p class="font-16 m-b-5">เข้าร่วมแล้ว</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_club_log'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account-off font-20 text-info"></i>
                                <p class="font-16 m-b-5">ยังไม่ได้เข้าร่วม</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_member'] - $response['count_club_log'];  ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-home font-20 text-info"></i>
                                <p class="font-16 m-b-5">ชุมนุมทั้งหมด</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_all_club'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account-alert font-20 text-info"></i>
                                <p class="font-16 m-b-5">อนุมัตินิแล้ว</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_club_appove'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-account-alert font-20 text-info"></i>
                                <p class="font-16 m-b-5">รออนุมัติ</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_club_pending'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <i class="mdi mdi-close-box-outline font-20 text-info"></i>
                                <p class="font-16 m-b-5">ไม่อนุมัติ</p>
                            </div>
                            <div class="col-5">
                                <h1 class="font-light text-right mb-0"><?= $response['count_club_cancel'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($_SESSION['role'] == 'admin'){ ?>
        <center>
            <p>สถานะชุมนุม</p>
        </center>
        <div class="input-group">
            <?php
            // Define an array with custom values and text for the select options
            $options = array(
                "1" => "เปิดชุมนุม",
                "0" => "ปิดชุมนุม",

            );

            // Function to generate the HTML for the select element
            function generateSelectOptions($options, $selectedValue)
            {
                $html = '';
                // $html = '<select name="custom_select">';
                foreach ($options as $value => $text) {
                    // print_r($text);
                    $selected = ($value == $selectedValue) ? 'selected' : '';
                    $html .= '<option value="' . $value . '"' . $selected . '>' . $text . '</option>';
                }
                // $html .= '</select>';
                return $html;
            }

            // Example usage: select "option2" by default
            $selectedValue = $response['club_setting']['status'];
            // print_r($selectedValue);
            ?>
            <select class="custom-select" id="statusClub" aria-label="Example select with button addon">
                <?php echo generateSelectOptions($options, $selectedValue); ?>
            </select>
            <div class="input-group-append">
                <button onclick="update_status_club()" class="btn btn-outline-secondary" type="button">Button</button>
            </div>
<?php } ?>
        </div>
    </div>
</div>