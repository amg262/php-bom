<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 3:16 AM
 * Classes:
Part, Subassembly, Assembly, Vendors

purchase order, inbound, requisition, outbound, stock location, rejected, inventory

ECN, ECN manager,

.........
Part

-.......
-
Subassembly int I assem

Array k:part object, qty.

-.....
-
Assembly int I assem

Array k:sub, qty, parts

-........
-
Product

ID name desc cost price
Array k:assem, qty

-........
-
Inbound

Array part, qty, location

-........
-
Location

I'd name desc

-.......
-
Inventory item

Array inbound

-.......
-
Rejection

Array inbound get parts

......

Po

Array parts, qty, Vendor

....

Vendor

Name etc.

....

Req

Array parts, qty, po

....

Outbound

Array inventory item

...

ECN

Array k:part, subassem, Assembly, product



Tables

Parts, sub assem, Assembly, product

Subassem_parts qty, subassem_subassem I'd 1 2 qty 1 2,
Subassem_assem qty,
Assem_parts qty,
Assem_product qty


Inbound, location, inventory, rejection

Inbound, inbound items.
Inventory, inventory items,
Rejection

Po, vendor, outbound






 */
include_once('classes/Part.php');

include_once('classes/Purchase_Order.php');


$po = new Part();
$po->setPartNo('4');
//print($po->getPartNo());
$part = new PO($po);
print($part->getTxn());
