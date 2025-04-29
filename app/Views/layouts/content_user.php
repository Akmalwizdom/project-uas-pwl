<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">My Airdrops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Available Airdrops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Task Completion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">My Wallet</a>
                        </li>
                    </ul>
                    <div>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share Referral</a>
                            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Export History</a>
                            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Claim Tokens</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="statistics-title">Total Earnings</p>
                                        <h3 class="rate-percentage">$4,850.00</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+$740 this week</span></p>
                                    </div>
                                    <div>
                                        <p class="statistics-title">Claimed Airdrops</p>
                                        <h3 class="rate-percentage">18</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+3 this week</span></p>
                                    </div>
                                    <div>
                                        <p class="statistics-title">Pending Claims</p>
                                        <h3 class="rate-percentage">5</h3>
                                        <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-1 this week</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Eligibility Score</p>
                                        <h3 class="rate-percentage">92%</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+7%</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Active Projects</p>
                                        <h3 class="rate-percentage">6</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+2</span></p>
                                    </div>
                                    <div class="d-none d-md-block">
                                        <p class="statistics-title">Referral Earnings</p>
                                        <h3 class="rate-percentage">$620.00</h3>
                                        <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+$120 this week</span></p>
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
                                                        <h4 class="card-title card-title-dash">Token Performance</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Track your airdrop token value across multiple projects</p>
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
                                                                <a class="dropdown-item" href="#">All Time</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                        <h2 class="me-2 fw-bold">$4,850.00</h2>
                                                        <h4 class="text-success">(+23.4%)</h4>
                                                    </div>
                                                    <div class="me-3">
                                                        <div id="airdropPerformance-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="chartjs-bar-wrapper mt-3">
                                                    <canvas id="airdropPerformance"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Recent Airdrops</h4>
                                                <p class="card-description">Your recently claimed token rewards</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Project</th>
                                                                <th>Token Amount</th>
                                                                <th>USD Value</th>
                                                                <th>Claimed Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>ArbiNova (ANV)</td>
                                                                <td>1,250 ANV</td>
                                                                <td>$740.00</td>
                                                                <td>26 Apr 2025</td>
                                                                <td><label class="badge badge-success">Claimed</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>SolSwap (SWP)</td>
                                                                <td>580 SWP</td>
                                                                <td>$420.00</td>
                                                                <td>24 Apr 2025</td>
                                                                <td><label class="badge badge-warning">Processing</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ETHDao (DAO)</td>
                                                                <td>75 DAO</td>
                                                                <td>$680.00</td>
                                                                <td>22 Apr 2025</td>
                                                                <td><label class="badge badge-success">Claimed</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>OptiSync (OSYNC)</td>
                                                                <td>320 OSYNC</td>
                                                                <td>$560.00</td>
                                                                <td>21 Apr 2025</td>
                                                                <td><label class="badge badge-success">Claimed</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>AvalancheX (AVLX)</td>
                                                                <td>150 AVLX</td>
                                                                <td>$375.00</td>
                                                                <td>19 Apr 2025</td>
                                                                <td><label class="badge badge-success">Claimed</label></td>
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
                                                            <h4 class="card-title card-title-dash">Upcoming Tasks</h4>
                                                            <div class="add-items d-flex mb-0">
                                                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="list-wrapper">
                                                            <ul class="todo-list todo-list-rounded">
                                                                <li class="d-block">
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Connect wallet to OptiSync platform <i class="input-helper rounded"></i>
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
                                                                            <input class="checkbox" type="checkbox"> Bridge tokens to Arbitrum network <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">30 April 2025</div>
                                                                            <div class="badge badge-opacity-secondary me-3">Due this week</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox" checked> Provide liquidity on SolSwap <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">26 April 2025</div>
                                                                            <div class="badge badge-opacity-success me-3">Completed</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox" checked> Stake tokens in ETHDao governance <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">27 April 2025</div>
                                                                            <div class="badge badge-opacity-success me-3">Completed</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Complete KYC for ZKSync airdrop <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">2 May 2025</div>
                                                                            <div class="badge badge-opacity-secondary me-3">Upcoming</div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="border-bottom-0">
                                                                    <div class="form-check w-100">
                                                                        <label class="form-check-label">
                                                                            <input class="checkbox" type="checkbox"> Complete minimum transaction volume for BNB Chain <i class="input-helper rounded"></i>
                                                                        </label>
                                                                        <div class="d-flex mt-2">
                                                                            <div class="ps-4 text-small me-3">25 April 2025</div>
                                                                            <div class="badge badge-opacity-danger me-3">Expired</div>
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
                                                            <h4 class="card-title card-title-dash">Portfolio Overview</h4>
                                                        </div>
                                                        <div class="mt-3">
                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                <div class="d-flex">
                                                                    <div class="wrapper ms-3">
                                                                        <p class="ms-1 mb-1 fw-bold">ETH</p>
                                                                        <small class="text-muted mb-0">Ethereum</small>
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted text-small">
                                                                    $1,850.00
                                                                </div>
                                                            </div>
                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                <div class="d-flex">
                                                                    <div class="wrapper ms-3">
                                                                        <p class="ms-1 mb-1 fw-bold">SOL</p>
                                                                        <small class="text-muted mb-0">Solana</small>
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted text-small">
                                                                    $1,240.00
                                                                </div>
                                                            </div>
                                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                <div class="d-flex">
                                                                    <div class="wrapper ms-3">
                                                                        <p class="ms-1 mb-1 fw-bold">AVAX</p>
                                                                        <small class="text-muted mb-0">Avalanche</small>
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted text-small">
                                                                    $960.00
                                                                </div>
                                                            </div>
                                                            <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                <div class="d-flex">
                                                                    <div class="wrapper ms-3">
                                                                        <p class="ms-1 mb-1 fw-bold">ARB</p>
                                                                        <small class="text-muted mb-0">Arbitrum</small>
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted text-small">
                                                                    $800.00
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <a href="#" class="btn btn-block btn-primary text-white">Withdraw</a>
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
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Available Airdrops</h4>
                                        <p class="card-description">Upcoming and active airdrop opportunities</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Project</th>
                                                        <th>Est. Value</th>
                                                        <th>Deadline</th>
                                                        <th>Requirements</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ZKSync Roll-up (ZKR)</td>
                                                        <td>$800 - $1,200</td>
                                                        <td>May 15, 2025</td>
                                                        <td>Bridge assets, KYC verification</td>
                                                        <td><label class="badge badge-info">Active</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Join</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Base Protocol (BASE)</td>
                                                        <td>$500 - $900</td>
                                                        <td>TBA</td>
                                                        <td>Transaction history, Social verification</td>
                                                        <td><label class="badge badge-info">Active</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Join</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polkadot Parachain (PARA)</td>
                                                        <td>$700 - $1,100</td>
                                                        <td>TBA</td>
                                                        <td>DOT staking, Identity verification</td>
                                                        <td><label class="badge badge-info">Active</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Join</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Celestia Network (TIA)</td>
                                                        <td>$1,000 - $1,500</td>
                                                        <td>Feb 20, 2026</td>
                                                        <td>EVM transactions, Wallet age</td>
                                                        <td><label class="badge badge-info">Active</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Join</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Polygon zkEVM (zEVM)</td>
                                                        <td>$600 - $900</td>
                                                        <td>Des 12, 2025</td>
                                                        <td>Bridge to zkEVM, Social proof</td>
                                                        <td><label class="badge badge-info">Active</label></td>
                                                        <td><button class="btn btn-sm btn-primary text-light">Join</button></td>
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
                                        <h4 class="card-title">Current Task Progress</h4>
                                        <p class="card-description">Your progress on active airdrop requirements</p>
                                        <div class="mt-4">
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Connect Wallet</p>
                                                        <small class="text-muted mb-0">ZKSync Roll-up</small>
                                                    </div>
                                                </div>
                                                <div class="text-success text-small">
                                                    Completed
                                                </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Complete KYC Verification</p>
                                                        <small class="text-muted mb-0">ZKSync Roll-up</small>
                                                    </div>
                                                </div>
                                                <div class="text-warning text-small">
                                                    In Progress
                                                </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Bridge Minimum Assets</p>
                                                        <small class="text-muted mb-0">Polygon zkEVM</small>
                                                    </div>
                                                </div>
                                                <div class="text-success text-small">
                                                    Completed
                                                </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Twitter Verification</p>
                                                        <small class="text-muted mb-0">Polygon zkEVM</small>
                                                    </div>
                                                </div>
                                                <div class="text-success text-small">
                                                    Completed
                                                </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Join Discord Community</p>
                                                        <small class="text-muted mb-0">Base Protocol</small>
                                                    </div>
                                                </div>
                                                <div class="text-danger text-small">
                                                    Not Started
                                                </div>
                                            </div>
                                            <div class="wrapper d-flex align-items-center justify-content-between py-2">
                                                <div class="d-flex">
                                                    <div class="wrapper ms-3">
                                                        <p class="ms-1 mb-1 fw-bold">Complete Test Transaction</p>
                                                        <small class="text-muted mb-0">Base Protocol</small>
                                                    </div>
                                                </div>
                                                <div class="text-warning text-small">
                                                    In Progress
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Task Completion Chart</h4>
                                        <p class="card-description">Your progress across all airdrops</p>
                                        <div class="chartjs-wrapper mt-5">
                                            <canvas id="taskCompletionChart"></canvas>
                                        </div>
                                        <div class="mt-4">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-success me-2"></span>
                                                    <p class="mb-0">Completed</p>
                                                </div>
                                                <p class="mb-0">18 Tasks</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-warning me-2"></span>
                                                    <p class="mb-0">In Progress</p>
                                                </div>
                                                <p class="mb-0">3 Tasks</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <span class="dot-indicator bg-danger me-2"></span>
                                                    <p class="mb-0">Not Started</p>
                                                </div>
                                                <p class="mb-0">2 Tasks</p>
                                            </div>
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
                                        <h4 class="card-title">Wallet Information</h4>
                                        <p class="card-description">Your connected wallet details</p>
                                        <div class="my-4">
                                            <div class="d-flex justify-content-between border-bottom py-2">
                                                <p class="text-muted">Wallet Address</p>
                                                <p class="fw-bold">0x71C...F3A2</p>
                                            </div>
                                            <div class="d-flex justify-content-between border-bottom py-2">
                                                <p class="text-muted">Wallet Type</p>
                                                <p class="fw-bold">MetaMask</p>
                                            </div>
                                            <div class="d-flex justify-content-between border-bottom py-2">
                                                <p class="text-muted">Connection Status</p>
                                                <p class="text-success">Connected</p>
                                            </div>
                                            <div class="d-flex justify-content-between border-bottom py-2">
                                                <p class="text-muted">Network</p>
                                                <p class="fw-bold">Ethereum Mainnet</p>
                                            </div>
                                            <div class="d-flex justify-content-between py-2">
                                                <p class="text-muted">Last Transaction</p>
                                                <p class="fw-bold">27 Apr 2025</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-danger me-2">Disconnect Wallet</button>
                                            <button class="btn btn-info">Change Network</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Withdrawal History</h4>
                                        <p class="card-description">Recent token withdrawals to external wallets</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Token</th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ETHDao (DAO)</td>
                                                        <td>25 DAO</td>
                                                        <td>23 Apr 2025</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ArbiNova (ANV)</td>
                                                        <td>450 ANV</td>
                                                        <td>20 Apr 2025</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SolSwap (SWP)</td>
                                                        <td>180 SWP</td>
                                                        <td>18 Apr 2025</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td>OptiSync (OSYNC)</td>
                                                        <td>120 OSYNC</td>
                                                        <td>15 Apr 2025</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Wallet Management</h4>
                                        <p class="card-description">Configure your airdrop collection settings</p>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="defaultWallet">Default Withdrawal Wallet</label>
                                                    <select class="form-control" id="defaultWallet">
                                                        <option>Ethereum (0x7F5e...3A42)</option>
                                                        <option>Solana (4jW2b...9qZx)</option>
                                                        <option>Arbitrum (0x3F1c...7B29)</option>
                                                        <option>Polygon (0x9D2f...5E11)</option>
                                                        <option>Avalanche (0x4A8d...2C76)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="autoClaim">Auto-Claim Settings</label>
                                                    <select class="form-control" id="autoClaim">
                                                        <option>Enable for all airdrops</option>
                                                        <option>Enable for verified projects only</option>
                                                        <option>Manual claim only</option>
                                                    </select>
                                                </div>
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" checked> Enable email notifications
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" checked> Enable security alerts
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gasSettings">Gas Fee Preferences</label>
                                                    <select class="form-control" id="gasSettings">
                                                        <option>Standard (recommended)</option>
                                                        <option>Fast</option>
                                                        <option>Slow (economical)</option>
                                                        <option>Custom</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="networkPriority">Network Priority</label>
                                                    <select class="form-control" id="networkPriority">
                                                        <option>Ethereum Mainnet</option>
                                                        <option>Layer 2 Solutions</option>
                                                        <option>All Networks Equal</option>
                                                    </select>
                                                </div>
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> Enable auto-staking for reward tokens
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" checked> Share anonymous usage data for better recommendations
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3 text-light">Save Changes</button>
                                        <button class="btn btn-light mt-3 ml-2">Reset to Default</button>
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

