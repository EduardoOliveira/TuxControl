<div class="col-md-2 page-sidebar">
    <ul class=page-navigation>
        <?php foreach (TuxCore::load_global_config("settings_entries") as $module): ?>
        <li>
            <?php if (empty($module['title']['path'])): ?>
            <a href="#">
            <?php else: ?>
            <a href="<?= $module['title']['path'] ?>">
            <?php endif; ?>
                <span class="<?= $module['title']['icon'] ?>"></span>
                <?= $module['title']['label'] ?>
            </a>
            <?php if (!empty($module['entry'])): ?>
            <ul>
                <?php foreach ($module['entry'] as $entry): ?>
                <li>
                    <?php if (empty($entry['path'])): ?>
                    <a href="#">
                    <i class="icon-angle-down pull-right"></i>
                    <?php else: ?>
                        <a href="<?= $entry['path'] ?>">
                    <?php endif; ?>
                        <?= $entry['label'] ?>
                    </a>
                    <?php if (!empty($entry['sub'])): ?>
                    <ul>
                        <?php foreach ($entry['sub'] as $sub): ?>
                        <li>
                            <a href="<?= $sub['path'] ?>">
                                <?= $sub['label'] ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>