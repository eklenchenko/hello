SELECT `type`, `value`
FROM `data`,
     (SELECT `type` AS t, max(`date`) AS d FROM data GROUP BY t) AS data_max
WHERE t=`type` AND d=`date` GROUP BY `type` ORDER BY id
