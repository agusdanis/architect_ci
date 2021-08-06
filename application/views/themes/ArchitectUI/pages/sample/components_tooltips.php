                <!-- components_tooltips.php -->
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                    </i>
                                </div>
                                <div>Tooltips &amp; Popovers
                                    <div class="page-title-subheading">These React components are used to add interaction or extra information for your app&#x27;s content.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    </div>
                    </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Popovers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Tooltips</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Basic</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    Popover on top
                                                </button>
        
                                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    Popover on right
                                                </button>
        
                                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    Popover on bottom
                                                </button>
        
                                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    Popover on left
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Gradient Colors</h5>
                                            <div class="text-center">
                                                <button type="button" data-title="Warm Flame" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-warm-flame" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Warm Flame
                                                </button>
                                                <button type="button" data-title="Night Fade" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-night-fade" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Night Fade
                                                </button>
                                                <button type="button" data-title="Sunny Morning" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-sunny-morning" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Sunny Morning
                                                </button>
                                                <button type="button" data-title="Tempting Azure" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-tempting-azure" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Tempting Azure
                                                </button>
                                                <button type="button" data-title="Amy Crisp" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-amy-crisp" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Amy Crisp
                                                </button>
                                                <button type="button" data-title="Heavy Rain" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-heavy-rain" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Heavy Rain
                                                </button>
                                                <button type="button" data-title="Mean Fruit" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-mean-fruit" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Mean Fruit
                                                </button>
                                                <button type="button" data-title="Malibu Beach" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-malibu-beach" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Malibu Beach
                                                </button>
                                                <button type="button" data-title="Deep Blue" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-deep-blue" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Deep Blue
                                                </button>
                                                <button type="button" data-title="Ripe Malin" data-toggle="popover-custom-bg" data-bg-class="text-light bg-ripe-malin" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Ripe Malin
                                                </button>
                                                <button type="button" data-title="Arielle Smile" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-arielle-smile" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Arielle Smile
                                                </button>
                                                <button type="button" data-title="Plum Plate" data-toggle="popover-custom-bg" data-bg-class="text-light bg-plum-plate" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Plum Plate
                                                </button>
                                                <button type="button" data-title="Happy Fisher" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-happy-fisher" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Happy Fisher
                                                </button>
                                                <button type="button" data-title="Happy Itmeo" data-toggle="popover-custom-bg" data-bg-class="text-light bg-happy-itmeo" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Happy Itmeo
                                                </button>
                                                <button type="button" data-title="Mixed Hopes" data-toggle="popover-custom-bg" data-bg-class="text-light bg-mixed-hopes" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Mixed Hopes
                                                </button>
                                                <button type="button" data-title="Strong Bliss" data-toggle="popover-custom-bg" data-bg-class="text-light bg-strong-bliss" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Strong Bliss
                                                </button>
                                                <button type="button" data-title="row-Early" data-toggle="popover-custom-bg" data-bg-class="text-light bg-grow-early" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Grow-Early
                                                </button>
                                                <button type="button" data-title="Love Kiss" data-toggle="popover-custom-bg" data-bg-class="text-light bg-love-kiss" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Love Kiss
                                                </button>
                                                <button type="button" data-title="Premium Dark" data-toggle="popover-custom-bg" data-bg-class="text-light bg-premium-dark" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Premium Dark
                                                </button>
                                                <button type="button" data-title="Happy Green" data-toggle="popover-custom-bg" data-bg-class="text-light bg-happy-green" data-content="Example popover with custom background from CSS helper class!"
                                                        class="mr-2 mb-2 btn btn-secondary">Happy Green
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Solid Colors</h5>
                                            <div class="text-center">
                                                <button type="button" data-title="Primary" data-toggle="popover-custom-bg" data-bg-class="text-light bg-primary" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-primary">Primary
                                                </button>
                                                <button type="button" data-title="Secondary" data-toggle="popover-custom-bg" data-bg-class="text-light bg-secondary" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-secondary">
                                                    Secondary
                                                </button>
                                                <button type="button" data-title="Success" data-toggle="popover-custom-bg" data-bg-class="text-light bg-success" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-success">Success
                                                </button>
                                                <button type="button" data-title="Info" data-toggle="popover-custom-bg" data-bg-class="text-light bg-info" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-info">Info</button>
                                                <button type="button" data-title="Warning" data-toggle="popover-custom-bg" data-bg-class="text-light bg-warning" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-warning ">
                                                    Warning
                                                </button>
                                                <button type="button" data-title="Danger" data-toggle="popover-custom-bg" data-bg-class="text-light bg-danger" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-danger">Danger
                                                </button>
                                                <button type="button" data-title="Focus" data-toggle="popover-custom-bg" data-bg-class="text-light bg-focus" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-focus">Focus</button>
                                                <button type="button" data-title="Alternate" data-toggle="popover-custom-bg" data-bg-class="text-light bg-alternate" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-alternate">
                                                    Alternate
                                                </button>
                                                <button type="button" data-title="Light" data-toggle="popover-custom-bg" data-bg-class="text-dark bg-light" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-light">Light</button>
                                                <button type="button" data-title="Dark" data-toggle="popover-custom-bg" data-bg-class="text-light bg-dark" data-content="Popover with states background colors!" class="mr-2 mb-2 btn btn-dark">Dark</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Custom</h5>
                                            <div class="text-center">
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="0" class="mr-2 mb-2 btn btn-primary">Primary</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="1" class="mr-2 mb-2 btn btn-secondary">Secondary</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="2" class="mr-2 mb-2 btn btn-success">Success</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="3" class="mr-2 mb-2 btn btn-info">Info</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="4" class="mr-2 mb-2 btn btn-warning ">Warning</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="0" class="mr-2 mb-2 btn btn-danger">Danger</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="1" class="mr-2 mb-2 btn btn-focus">Focus</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="2" class="mr-2 mb-2 btn btn-alternate">Alternate</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="3" class="mr-2 mb-2 btn btn-light">Light</button>
                                                <button type="button" data-toggle="popover-custom-content" rel="popover-focus" popover-id="4" class="mr-2 mb-2 btn btn-dark">Dark</button>
                                            </div>
                                        </div>
        
                                        <div id="popover-content-0" class="d-none">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-primary">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                    <div class="menu-header-content"><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity</li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn nav-item">
                                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="popover-content-1" class="d-none">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-secondary">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                                    <div class="menu-header-content"><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity</li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn nav-item">
                                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="popover-content-2" class="d-none">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-success">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                                    <div class="menu-header-content"><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity</li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn nav-item">
                                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="popover-content-3" class="d-none">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-danger">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content"><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity</li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn nav-item">
                                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="popover-content-4" class="d-none">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-warning">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                                    <div class="menu-header-content"><h5 class="menu-header-title">Settings</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity</li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                </a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn nav-item">
                                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                </li>
                                            </ul>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Dark Tooltips</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                    Tooltip on top
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                    Tooltip on right
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                    Tooltip on bottom
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                                    Tooltip on left
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Light Tooltips</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="top" title="Tooltip on top">
                                                    Tooltip on top
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="right" title="Tooltip on right">
                                                    Tooltip on right
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="bottom" title="Tooltip on bottom">
                                                    Tooltip on bottom
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="tooltip-light" data-placement="left" title="Tooltip on left">
                                                    Tooltip on left
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
