SELECT
    i.id AS id,
    i.name AS name,
    i.image AS image,
    i.image_folder AS image_folder,
    i.image_2 AS image_2,
    i.image_2_folder AS image_2_folder,
    s.art AS art,
    ip.price AS price
FROM
    items i
        LEFT JOIN subitems s on i.subitem_id = s.id
        LEFT JOIN item_prices ip on i.id = ip.item_id
WHERE
    (i.image IS NULL AND i.image_folder IS NULL)
    AND (i.image_2 IS NULL AND i.image_2_folder IS NULL);
