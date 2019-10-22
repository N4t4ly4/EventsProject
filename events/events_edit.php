<?php include '../view/header.php'; ?>
<main>
   <section>
       <h1>Edit An Event</h1>

        <form action="/EventsProject/events/index.php" method="post">
            <input type="hidden" name="action" value="edit_event_data">
            <input type="hidden" name="event_id" value="<?$event=['event_id']?>">
            Event Name: <input type="text" name="event_name" value="<?=$event['event_name']?>"><br>
            Event TYpe:
            <select name="event_type">
                <?php foreach($event_types as $event_type): ?>
                    <option value="<?=$event_type[0]?>"
                    <?php if ($event_type[0] == $event['event_type']): ?>
                        selected="true";
                    <?php endif; ?>>
                    <?=$event_type[0]?>
                    </option>
                <?php endforeach; ?>
            </select> <br>
            Event Location: <input type="text" name="event_location" size="70" value="<?php $event['event_location']?>"><br>
            Event Date and Start Time: <input type="text" name="start_time" value="<?php $event['start_time']?>">
            Event Date and End Time: <input type="text" name="end_time" value="<?php $event['end_time']?>">
            Event Hours Duration: <input type="text" name="hours_duration" value="<?php $event['duration']?>"><br>
            <input type="submit" value="submit">
        </form>

   </section>
</main>
<?php include '../view/footer.php'; ?>