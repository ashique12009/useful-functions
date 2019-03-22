<?php 

$query = "SELECT campaigns.id as cid, campaigns.name as cname, 
            (SELECT COUNT(*) FROM campaigns 
            INNER JOIN landers ON campaigns.id=landers.campaign_id) as landcounter,
            FROM campaigns as c
            LEFT JOIN (SELECT id, campaign_id, SUM(revenue) as revenue 
                        FROM conversions 
                        GROUP BY campaign_id) AS p
            ON p.campaign_id = c.id";