<html>
<head>
    <style type="text/css" media="all">
        @page {
            size: A4 portrait; /* can use also 'landscape' for orientation */
            margin: 1.0in;
            border: thin solid black;
            padding: 1em;

            @bottom-center {
                content: element(footer);
            }

            @top-center {
                content: element(header);
            }
        }

        div.pageheader {
            text-align: center;
            margin-top: -10px;
        }

        body {
            font-size: 12px;
            margin-top: -50px;
        }
    </style>
</head>

<body>
<div class="logo">
    <img height="70px" width="200px"
         src="data:image/png;base64,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"/>
</div>
<div class="pageheader">
    <h2>Installation Agreement</h2>
</div>
<div class="pagebody">
    <p>Terms agreed on by
        <?php echo $quote->company_name; ?> and <?php echo $quote->customer_name; ?> for
        <?php echo $quote->job_type; ?> job at the following job site address:
    </p>
    <p>
        <?php echo $quote->site_address; ?>, <?php echo $quote->site_city; ?> ON <?php echo $quote->site_postal_code; ?>
    </p>
    <ol>
        <li>
            The Payment Terms Are: <?php echo $quote->payment_term; ?>
        </li>
        <li>
            It is agreed that the customer or the owner have obtained the authorization and the necessary permits
            from
            the city or municipality concerned.
        </li>
        <li>The customer is responsible for leveling and clearing of the land.</li>
        <li>For each post to be installed in rock, large stone, cement flooring, roots or backfill waste, and
            requiring
            additional time for the hole excavation, either with compressor or carbide blade, work will be considered
            rock
            drilling and charged at the rate of 40$ per hole.
        </li>
        <li>The customer agrees to release
            <?php echo $quote->company_name; ?> from any claim resulting from damages caused to
            underground conduits such as telephone or electrical wires or cables, gas lines, water pipes or sewer pipes.
        </li>
        <li><?php echo $quote->company_name; ?> will install the fence and / or accessories according
            to the levels and will not be held responsible for any changes or mistakes concerning this factor after
            installation. FURTHERMORE, IT IS AGREED THAT THE LOCATION OF LIMITS OR LINES WILL BE DETERMINED PRIOR TO THE
            RRIVAL OF INSTLLATION CREWS.
        </li>
        <li>The land where the fence will be installed must have suitable access be a mechanical drill and a cement
            mix
            truck. The terrain must allow for digging of the holes without caving-in.
        </li>
        <li><?php echo $quote->company_name; ?> will not be responsible for damages caused to the
            ground by the normal use of heavy equipment. Therefore the fence work must be planned between the
            preliminary excavation and the final excavation. THE POST EXCAVATION WILL BE EVENLY SPREAD AROUND EACH
            FOUNDATION.
        </li>
        <li>The Customer or Owner will advice us at least 7 days prior to the installation date of fence or
            accessories: a
            fence installation includes two steps:<br>
            - First step: Digging and installation of units in concrete.<br>
            - Second step: Final installation of frame and grid.<br>
            If, because of the customer, owner or any contractor on their behalf, the project requires any additional
            travel,
            the travel expense will be billed.
        </li>
        <li>Once the installation finish, the invoice is calculated at the unit prices according to the quantities
            provided and installed. To conform to the prices quoted the quantities provided and installed must not be
            lower
            than 20% of the projected quantities.
        </li>
        <li>Any damage caused to the fence by the customer or others after installation will be at the expense of
            the
            customer or owner.
        </li>
        <li>Snow removal must be done by the customer during the execution of work if necessary.</li>
        <li>Where there is non-compliance with the terms and conditions above, the customer or owner will be
            responsible
            for the legal and extrajudicial costs pertinent to this agreement.
        </li>
        <li><?php echo $quote->company_name; ?> will remedy any defects due to faulty workman ship or
            material, which appear, and are complained of in writing, within one year from the date of installation.
        </li>
        <li>15. The seller’s performance of the contract shall be subject to fires, strikes, labor disputes, war, civil
            commotion, epidemics, embargoes, floods, delays in transportation, shortage of cars, fuel or other
            materials,
            default of carries or contracts, shortage of labor, acts of god, acts, demands, requirements or requests of
            any
            state or government or to any other causes beyond the control of the seller whether or not of a kind herein
            before specified notwithstanding that such cause is operative at the time of making this contract. If
            performance of the contract by the seller be delayed for a period exceeding sixty days by any such cause
            either
            party shall at its option be relieved from further responsibility, otherwise the limit of delivery shall be
            extended as may be necessary to enable seller to make delivery, provided that in respect of products
            manufactured or in process of manufacture at the date of exercise of the option such relief from
            responsibility
            shall be subject to the consent of the seller.
        </li>
        <li>16. Title to property in and ownership of the said goods shall remain with the vendor, at the purchaser’s
            risk
            until all amounts due hereunder of any renewal or extension hereof are fully paid.
        </li>
        <li>17.
            <?php echo $quote->company_name; ?> reserves the right to substitute materials specified
            with an equivalent or superior product.
        </li>
        <li>18. The vendor recognizes that the customer may, for operation convenience, desire to utilize its own in
            acceptance of this quotation or otherwise acknowledge it than by simple acceptance. Therefore it is
            understood
            and agreed that any provision in such which modifies, excludes, or contradicts any provision of this
            agreement
            shall be deemed to be waived and that the provisions of this quotation, by such acceptance, form part of the
            whole contract between the parties.
        </li>
        <div style="text-align: center;padding-top: 20px;">
            <span>Client’s Signature____________________</span><span style="margin-left: 80px;"><?php echo $quote->company_name ?>_______________________</span>
        </div>
    </ol>
</div>
</body>
</html>