<div class="fss_connection_info">
    <table class="wp-list-table widefat striped">
        <tr>
            <th>Connection Type</th>
            <td><?php echo ucfirst($connection['provider']); ?></td>
        </tr>
        <tr>
            <th>Sender Email</th>
            <td><?php echo ucfirst($connection['sender_email']); ?></td>
        </tr>
        <tr>
            <th>Sender Name</th>
            <td><?php echo ucfirst($connection['sender_name']); ?></td>
        </tr>
        <tr>
            <th>Force Sender Name</th>
            <td><?php echo ucfirst($connection['force_from_name']); ?></td>
        </tr>
        <?php if(isset($connection['extra_rows'])) : ?>
        <?php foreach ($connection['extra_rows'] as $row): ?>
        <tr>
            <th><?php echo $row['title']; ?></th>
            <td><?php echo $row['content']; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>