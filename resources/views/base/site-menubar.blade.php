<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li id="dashboard" class="site-menu-item">
                        {!! HTML::decode(link_to_route('/','<i class="site-menu-icon wb-dashboard" aria-hidden="true"></i> <span class="site-menu-title"></span>')) !!}
                    </li>
                    <li id="administracion" class="site-menu-item">
                        {!! HTML::decode(link_to_route('administracion','<i class="icon wb-settings" aria-hidden="true"></i> <span class="site-menu-title"></span>')) !!}
                    </li>
                </ul>

                <div class="site-menubar-section">
                    <h5>
                        Milestone
                        <span class="pull-right">30%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                    </div>
                    <h5>
                        Release
                        <span class="pull-right">60%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>