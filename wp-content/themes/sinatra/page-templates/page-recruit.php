<?php
/*
Template Name: recruit
*/
?>

<?php 
	// 採用情報ページの$post_id
	$post_id = 14;
    $recruit_data = get_field_objects($post_id);
	$work_data = get_field_object("rct_work_contents", $post_id);
	$work_content = $work_data["value"]
?>

<?php get_header(); ?>

<div class="si-container">
    <div id="primary" class="content-area">
        <div class="mb-2">
            <p class="sp-align">
                <span class="sub-ttl sub-underline">仕事内容</span></p>
            <div class="p-15">
                <ul class="recruit-ul">
                    <?php foreach ($work_content as $content) : ?>
                    <li><?php echo $content ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div>
            <p class="sp-align">
                <span class="sub-ttl sub-underline">システム開発エンジニアの<br class="is-sp" />募集要項</span></p>
            <div>
                <?php if (!empty($recruit_data)) : ?>
                <table>
                    <tbody>
                        <?php foreach ($recruit_data as $data) : ?>
                        <?php if ($data["name"] != "rct_work_contents") : ?>
                        <tr>
                            <th><?php echo $data["label"] ?></th>
                            <td><?php echo $data["value"] ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>