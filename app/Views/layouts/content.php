<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">User Analytics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Airdrop Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Task Verification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">System Settings</a>
                        </li>
                    </ul>
                    <div>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share Report</a>
                            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Generate Report</a>
                            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export Data</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="statistics-title">Total Users</p>
                                        <h3 class="rate-percentage">8,642</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+12.7%</span></p>
                                    </div>
                                    <div>
                                        <p class="statistics-title">Active Airdrops</p>
                                        <h3 class="rate-percentage">14</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+3 this week</span></p>
                                    </div>
                                    <div>
                                        <p class="statistics-title">Pending Verifications</p>
                                        <h3 class="rate-percentage">327</h3>
                                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-28 today</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Total Value Distributed</p>
                                        <h3 class="rate-percentage">$1.24M</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+$245K</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Avg. User Earnings</p>
                                        <h3 class="rate-percentage">$143.50</h3>
                                        <p class="text-warning d-flex"><i class="mdi mdi-alert-circle"></i><span>+5.2%</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Success Rate</p>
                                        <h3 class="rate-percentage">96.8%</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+1.8%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">User Participation Growth</h4>
                                                        <p class="card-subtitle card-subtitle-dash">New user registrations and airdrop participation rates</p>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <h6 class="dropdown-header">Time Period</h6>
                                                                <a class="dropdown-item" href="#">This Week</a>
                                                                <a class="dropdown-item" href="#">This Month</a>
                                                                <a class="dropdown-item" href="#">Last 3 Months</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Custom Range</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                        <h2 class="me-2 fw-bold">8,642 Users</h2>
                                                        <h4 class="me-2">Total Registered</h4>
                                                        <h4 class="text-success">(+12.7%)</h4>
                                                    </div>
                                                    <div class="me-3">
                                                        <div id="marketingOverview-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="chartjs-bar-wrapper mt-3">
                                                    <canvas id="userParticipationChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Top Performing Airdrops</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Airdrops with highest user participation and completion rates</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-plus"></i>Create New Airdrop</button>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-1">
                                                    <table class="table select-table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </th>
                                                                <th>Airdrop Campaign</th>
                                                                <th>Token</th>
                                                                <th>Participation</th>
                                                                <th>Completion Rate</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img src="<?= base_url() ?>staradmin/dist/assets/images/faces/face1.jpg" alt="">
                                                                        <div>
                                                                            <h6>ZKSync Roll-up</h6>
                                                                            <p>Layer 2 solution</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>ZKR</h6>
                                                                    <p>ZKSync </p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">3,842</p>
                                                                            <p>Users</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">88%</p>
                                                                            <p>Completed</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img src="<?= base_url() ?>staradmin/dist/assets/images/faces/face2.jpg" alt="">
                                                                        <div>
                                                                            <h6>Base Protocol</h6>
                                                                            <p>Ethereum L2</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>BASE</h6>
                                                                    <p>Base</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">2,751</p>
                                                                            <p>Users</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">72%</p>
                                                                            <p>Completed</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img src="<?= base_url() ?>staradmin/dist/assets/images/faces/face3.jpg" alt="">
                                                                        <div>
                                                                            <h6>Polygon zkEVM</h6>
                                                                            <p>Zero-knowledge rollup</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>zEVM</h6>
                                                                    <p>zkEVM</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">1,983</p>
                                                                            <p>Users</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">58%</p>
                                                                            <p>Completed</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-warning">Filling Fast</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img src="<?= base_url() ?>staradmin/dist/assets/images/faces/face4.jpg" alt="">
                                                                        <div>
                                                                            <h6>Celestia Network</h6>
                                                                            <p>Modular blockchain</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>TIA</h6>
                                                                    <p>Celestia</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">1,245</p>
                                                                            <p>Users</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">42%</p>
                                                                            <p>Completed</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-info">New</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img src="<?= base_url() ?>staradmin/dist/assets/images/faces/face5.jpg" alt="">
                                                                        <div>
                                                                            <h6>ArbiNova</h6>
                                                                            <p>Arbitrum ecosystem</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>ANV</h6>
                                                                    <p>ArbiNova</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">3,125</p>
                                                                            <p>Users</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">94%</p>
                                                                            <p>Completed</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-success">Completed</div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h4 class="card-title card-title-dash">Pending Verifications</h4>
                                                            <div class="add-items d-flex mb-0">
                                                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="list-wrapper">
                                                            <ul class="todo-list todo-list-rounded">
                                                                <li class="d-block">
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Review 42 KYC submissions <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">29 April 2025</div>
                                                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-block">
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Verify 18 wallet transactions <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">30 April 2025</div>
                                                                            <div class="badge badge-opacity-warning me-3">High priority</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Approve 7 social verifications <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">1 May 2025</div>
                                                                            <div class="badge badge-opacity-success me-3">Medium</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Process 23 airdrop claims <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">2 May 2025</div>
                                                                            <div class="badge badge-opacity-secondary me-3">Pending</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="border-bottom-0">
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Audit 5 suspicious accounts <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">3 May 2025</div>
                                                                            <div class="badge badge-opacity-danger me-3">Security</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <h4 class="card-title card-title-dash">User Distribution</h4>
                                                        </div>
                                                        <div>
                                                            <canvas class="my-auto" id="userDistributionChart"></canvas>
                                                        </div>
                                                        <div id="doughnutChart-legend" class="mt-5 text-center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Weekly Activity Report</h4>
                                                            </div>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This Week </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                                        <h6 class="dropdown-header">Time Period</h6>
                                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                                        <a class="dropdown-item" href="#">This Month</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <canvas id="weeklyActivityChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audiences" role="tabpanel" aria-labelledby="audiences">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Manage Airdrop Campaigns</h4>
                                        <p class="card-description">Create and configure new airdrop campaigns</p>
                                        <form class="forms-sample">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="airdropName">Airdrop Name</label>
                                                        <input type="text" class="form-control" id="airdropName" placeholder="e.g. ZKSync Community Airdrop">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tokenSymbol">Token Symbol</label>
                                                        <input type="text" class="form-control" id="tokenSymbol" placeholder="e.g. ZKR">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="totalSupply">Total Supply</label>
                                                        <input type="text" class="form-control" id="totalSupply" placeholder="e.g. 1000000">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="startDate">Start Date</label>
                                                        <input type="date" class="form-control" id="startDate">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectCategory">Project Category</label>
                                                        <select class="form-control" id="projectCategory">
                                                            <option>Layer 2 Solution</option>
                                                            <option>DeFi Protocol</option>
                                                            <option>NFT Platform</option>
                                                            <option>GameFi</option>
                                                            <option>DAO</option>
                                                            <option>Infrastructure</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="endDate">End Date</label>
                                                        <input type="date" class="form-control" id="endDate">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eligibility">Eligibility Criteria</label>
                                                        <select multiple class="form-control" id="eligibility">
                                                            <option>Wallet Activity</option>
                                                            <option>Social Verification</option>
                                                            <option>KYC Required</option>
                                                            <option>Minimum Balance</option>
                                                            <option>Transaction History</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Airdrop Description</label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" checked> Enable automatic distribution
                                                </label>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"> Enable multi-chain support
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2 text-light">Create Airdrop</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Airdrop Distribution Queue</h4>
                                        <p class="card-description">Pending and completed token distributions</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Airdrop</th>
                                                        <th>Token</th>
                                                        <th>Scheduled Date</th>
                                                        <th>Recipients</th>
                                                        <th>Total Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ZKSync Roll-up</td>
                                                        <td>ZKR</td>
                                                        <td>30 Apr 2025</td>
                                                        <td>3,842</td>
                                                        <td>1,920,000 ZKR</td>
                                                        <td><label class="badge badge-info">Pending</label></td>
                                                        <td><button class="btn btn-primary btn-rounded btn-fw text-light">Review</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Base Protocol</td>
                                                        <td>BASE</td>
                                                        <td>28 Apr 2025</td>
                                                        <td>2,751</td>
                                                        <td>1,375,500 BASE</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                        <td><button class="btn btn-sm btn-secondary text-light">Details</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polygon zkEVM</td>
                                                        <td>zEVM</td>
                                                        <td>2 May 2025</td>
                                                        <td>1,983</td>
                                                        <td>991,500 zEVM</td>
                                                        <td><label class="badge badge-info">Pending</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Review</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Celestia Network</td>
                                                        <td>TIA</td>
                                                        <td>5 May 2025</td>
                                                        <td>1,245</td>
                                                        <td>622,500 TIA</td>
                                                        <td><label class="badge badge-warning">Draft</label></td>
                                                        <td><button class="btn btn-sm btn-warning text-light">Edit</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ArbiNova</td>
                                                        <td>ANV</td>
                                                        <td>25 Apr 2025</td>
                                                        <td>3,125</td>
                                                        <td>1,562,500 ANV</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                        <td><button class="btn btn-sm btn-secondary text-light">Details</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="demographics" role="tabpanel" aria-labelledby="demographics">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Task Verification Queue</h4>
                                        <p class="card-description">Pending user task completions requiring verification</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Airdrop</th>
                                                        <th>Task</th>
                                                        <th>Submitted</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0x8a3...d4f2</td>
                                                        <td>ZKSync Roll-up</td>
                                                        <td>KYC Verification</td>
                                                        <td>28 Apr 2025</td>
                                                        <td><label class="badge badge-warning">Pending</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Verify</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x5b2...e7g1</td>
                                                        <td>Base Protocol</td>
                                                        <td>Twitter Follow</td>
                                                        <td>27 Apr 2025</td>
                                                        <td><label class="badge badge-warning">Pending</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Verify</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x3f9...c8h3</td>
                                                        <td>Polygon zkEVM</td>
                                                        <td>Bridge Transaction</td>
                                                        <td>27 Apr 2025</td>
                                                        <td><label class="badge badge-success">Verified</label></td>
                                                        <td><button class="btn btn-sm btn-secondary text-light">View</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x7e1...b5d9</td>
                                                        <td>Celestia Network</td>
                                                        <td>Wallet Activity</td>
                                                        <td>26 Apr 2025</td>
                                                        <td><label class="badge badge-warning">Pending</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Verify</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x2d4...a6f8</td>
                                                        <td>ArbiNova</td>
                                                        <td>Discord Join</td>
                                                        <td>25 Apr 2025</td>
                                                        <td><label class="badge badge-success">Verified</label></td>
                                                        <td><button class="btn btn-sm btn-secondary text-light">View</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Verification Statistics</h4>
                                        <p class="card-description">Task verification completion rates and trends</p>
                                        <div class="chartjs-wrapper mt-5">
                                            <canvas id="verificationStatsChart"></canvas>
                                        </div>
                                        <div class="mt-4">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-success me-2"></span>
                                                    <p class="mb-0">Approved</p>
                                                </div>
                                                <p class="mb-0">1,842 (78%)</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-warning me-2"></span>
                                                    <p class="mb-0">Pending</p>
                                                </div>
                                                <p class="mb-0">327 (14%)</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-danger me-2"></span>
                                                    <p class="mb-0">Rejected</p>
                                                </div>
                                                <p class="mb-0">14 (6%)</p>
                                                </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-info me-2"></span>
                                                    <p class="mb-0">Requires Review</p>
                                                </div>
                                                <p class="mb-0">187 (8%)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Suspicious Activity Monitoring</h4>
                                        <p class="card-description">Potential fraudulent activities detected</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Airdrop</th>
                                                        <th>Issue Type</th>
                                                        <th>Detected</th>
                                                        <th>Severity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0x9f2...e5d1</td>
                                                        <td>ZKSync Roll-up</td>
                                                        <td>Duplicate Wallet</td>
                                                        <td>28 Apr 2025</td>
                                                        <td><label class="badge badge-danger">High</label></td>
                                                        <td><button class="btn btn-sm btn-danger text-light">Block</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x4b7...c3f8</td>
                                                        <td>Base Protocol</td>
                                                        <td>Fake Social Proof</td>
                                                        <td>27 Apr 2025</td>
                                                        <td><label class="badge badge-warning">Medium</label></td>
                                                        <td><button class="btn btn-sm btn-warning text-light">Investigate</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x2a5...d9e3</td>
                                                        <td>Polygon zkEVM</td>
                                                        <td>Sybil Attack Pattern</td>
                                                        <td>26 Apr 2025</td>
                                                        <td><label class="badge badge-danger">High</label></td>
                                                        <td><button class="btn btn-sm btn-danger text-light">Block</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x6e1...f4b2</td>
                                                        <td>Celestia Network</td>
                                                        <td>KYC Mismatch</td>
                                                        <td>25 Apr 2025</td>
                                                        <td><label class="badge badge-warning">Medium</label></td>
                                                        <td><button class="btn btn-sm btn-warning text-light">Investigate</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>0x3d8...a7c5</td>
                                                        <td>ArbiNova</td>
                                                        <td>Bot-like Behavior</td>
                                                        <td>24 Apr 2025</td>
                                                        <td><label class="badge badge-info">Low</label></td>
                                                        <td><button class="btn btn-sm btn-info text-light">Monitor</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="more" role="tabpanel" aria-labelledby="more">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">System Configuration</h4>
                                        <p class="card-description">Core platform settings and parameters</p>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="platformName">Platform Name</label>
                                                <input type="text" class="form-control" id="platformName" value="AirdropManager Pro">
                                            </div>
                                            <div class="form-group">
                                                <label for="baseCurrency">Base Currency</label>
                                                <select class="form-control" id="baseCurrency">
                                                    <option>USD</option>
                                                    <option>ETH</option>
                                                    <option>BTC</option>
                                                    <option>EUR</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="defaultChain">Default Blockchain</label>
                                                <select class="form-control" id="defaultChain">
                                                    <option selected>Ethereum</option>
                                                    <option>Binance Smart Chain</option>
                                                    <option>Polygon</option>
                                                    <option>Solana</option>
                                                    <option>Avalanche</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="gasLimit">Default Gas Limit</label>
                                                <input type="number" class="form-control" id="gasLimit" value="21000">
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" checked> Enable email notifications
                                                </label>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" checked> Enable automatic security scans
                                                </label>
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"> Enable maintenance mode
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2 text-light">Save Settings</button>
                                            <button class="btn btn-light">Reset Defaults</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Admin Management</h4>
                                        <p class="card-description">Manage administrator accounts and permissions</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Admin</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Last Active</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>John Smith</td>
                                                        <td>john@airdropmanager.com</td>
                                                        <td>Super Admin</td>
                                                        <td>28 Apr 2025, 14:32</td>
                                                        <td><label class="badge badge-success">Active</label></td>
                                                        <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sarah Johnson</td>
                                                        <td>sarah@airdropmanager.com</td>
                                                        <td>Verification Manager</td>
                                                        <td>28 Apr 2025, 11:15</td>
                                                        <td><label class="badge badge-success">Active</label></td>
                                                        <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael Chen</td>
                                                        <td>michael@airdropmanager.com</td>
                                                        <td>Airdrop Manager</td>
                                                        <td>27 Apr 2025, 18:45</td>
                                                        <td><label class="badge badge-success">Active</label></td>
                                                        <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Emily Wilson</td>
                                                        <td>emily@airdropmanager.com</td>
                                                        <td>Support Admin</td>
                                                        <td>26 Apr 2025, 09:22</td>
                                                        <td><label class="badge badge-warning">Inactive</label></td>
                                                        <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="btn btn-primary mt-3 text-light">Add New Admin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">API & Integration Settings</h4>
                                        <p class="card-description">Configure third-party integrations and API access</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="blockchainAPI">Blockchain API Provider</label>
                                                    <select class="form-control" id="blockchainAPI">
                                                        <option>Alchemy</option>
                                                        <option selected>Infura</option>
                                                        <option>QuickNode</option>
                                                        <option>Moralis</option>
                                                        <option>Custom</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="apiKey">API Key</label>
                                                    <input type="password" class="form-control" id="apiKey" value="***************">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kycProvider">KYC Provider</label>
                                                    <select class="form-control" id="kycProvider">
                                                        <option selected>Sumsub</option>
                                                        <option>Jumio</option>
                                                        <option>Onfido</option>
                                                        <option>Custom</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="oracleService">Price Oracle</label>
                                                    <select class="form-control" id="oracleService">
                                                        <option selected>Chainlink</option>
                                                        <option>Band Protocol</option>
                                                        <option>Uniswap TWAP</option>
                                                        <option>Custom</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="webhookURL">Webhook URL</label>
                                                    <input type="text" class="form-control" id="webhookURL" placeholder="https://api.yourservice.com/webhook">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ipfsGateway">IPFS Gateway</label>
                                                    <input type="text" class="form-control" id="ipfsGateway" value="https://ipfs.io/ipfs/">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary mt-3">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked> Enable API access logging
                                            </label>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Enable rate limiting
                                            </label>
                                        </div>
                                        <button class="btn btn-primary mt-3 text-light">Save Integration Settings</button>
                                        <button class="btn btn-info mt-3 ml-2">Test Connections</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">System Health & Maintenance</h4>
                                        <p class="card-description">Platform status and maintenance operations</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card card-statistics">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5 class="card-title">Server Load</h5>
                                                                <h2 class="text-success">24%</h2>
                                                            </div>
                                                            <div class="avatar avatar-sm">
                                                                <i class="mdi mdi-server"></i>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-md mt-3">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-statistics">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5 class="card-title">Database</h5>
                                                                <h2 class="text-info">37%</h2>
                                                            </div>
                                                            <div class="avatar avatar-sm">
                                                                <i class="mdi mdi-database"></i>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-md mt-3">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card card-statistics">
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5 class="card-title">Blockchain Sync</h5>
                                                                <h2 class="text-primary">100%</h2>
                                                            </div>
                                                            <div class="avatar avatar-sm">
                                                                <i class="mdi mdi-link"></i>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-md mt-3">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary me-2 text-light">Run Database Backup</button>
                                            <button class="btn btn-info me-2">Clear Cache</button>
                                            <button class="btn btn-warning me-2">Run Integrity Check</button>
                                            <button class="btn btn-danger">Emergency Maintenance</button>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="mb-3">Recent System Logs</h5>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Timestamp</th>
                                                            <th>Event</th>
                                                            <th>Severity</th>
                                                            <th>Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>28 Apr 2025 14:32:15</td>
                                                            <td>New airdrop created</td>
                                                            <td><label class="badge badge-info">Info</label></td>
                                                            <td>ZKSync Roll-up airdrop by John Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28 Apr 2025 11:15:42</td>
                                                            <td>User verification</td>
                                                            <td><label class="badge badge-success">Success</label></td>
                                                            <td>Approved 42 KYC submissions</td>
                                                        </tr>
                                                        <tr>
                                                            <td>27 Apr 2025 18:45:03</td>
                                                            <td>Token distribution</td>
                                                            <td><label class="badge badge-success">Success</label></td>
                                                            <td>Distributed 1,375,500 BASE tokens</td>
                                                        </tr>
                                                        <tr>
                                                            <td>27 Apr 2025 09:22:57</td>
                                                            <td>Security alert</td>
                                                            <td><label class="badge badge-warning">Warning</label></td>
                                                            <td>Detected potential Sybil attack</td>
                                                        </tr>
                                                        <tr>
                                                            <td>26 Apr 2025 16:08:31</td>
                                                            <td>API connection</td>
                                                            <td><label class="badge badge-danger">Error</label></td>
                                                            <td>Temporary Infura API outage</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

