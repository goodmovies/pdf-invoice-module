<?php
/**
 * This file is part of OXID eSales Invoice PDF module.
 *
 * OXID eSales Invoice PDF module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Invoice PDF module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Invoice PDF module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category      module
 * @package       oeinvoicepdf
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'invoicepdf',
    'title'       => 'Invoice PDF',
    'description' => 'Module to export invoice PDF files.',
    'thumbnail'   => 'picture.png',
    'version'     => '2.2.1',
    'author'      => 'OXID eSales AG',
    'extend'      => array(
        'oxorder'        => 'oe/invoicepdf/models/invoicepdfoxorder',
        'order_overview' => 'oe/invoicepdf/controllers/admin/invoicepdforder_overview'
    ),
    'files'       => array(
        'InvoicepdfBlock'          => 'oe/invoicepdf/models/invoicepdfblock.php',
        'InvoicepdfArticleSummary' => 'oe/invoicepdf/models/invoicepdfarticlesummary.php',
        'InvoicepdfPDF'            => 'oe/invoicepdf/core/invoicepdfpdf.php'
    ),
    'blocks'      => array(
        array(
            'template' => 'order_overview.tpl',
            'block'    => 'admin_order_overview_export',
            'file'     => 'views/admin/blocks/order_overview.tpl'
        ),
    ),
);
