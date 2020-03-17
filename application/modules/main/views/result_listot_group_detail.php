<div class="table-responsive">
<table id="listot_group_detail" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th >No.</th>
                            <th >เลขที่คำขอ</th>
                            <th >ชื่อผู้ขอทำโอที</th>
                            <th>รหัส</th>
                            <th>ตำแหน่ง</th>
                            <th>กะงาน</th>
                            <th>วันที่ขอทำโอที</th>
                            <th>สถานะ</th>
                            <!-- <th>#</th> -->
                        </tr>
                    </thead>

                    <tbody>
                    <?php
		foreach ($rs->result_array() as $getotlist) {

			if ($getotlist['ot_status'] == 'รออนุมัติ') {
				$colorFont = ' style="color:#B5B5B5" ';
			} else if ($getotlist['ot_status'] == 'อนุมัติ') {
				$colorFont = ' style="color:#008B00;" ';
			}else if ($getotlist['ot_status'] == 'ไม่อนุมัติ'){
				$colorFont = ' style="color:#EE7600;" ';
			}else if ($getotlist['ot_status'] == 'ยกเลิก'){
				$colorFont = ' style="color:#CD0000;" ';
			}else if($getotlist['ot_status'] == 'ฝ่ายบุคคลรับทราบ'){
				$colorFont = ' style="color:#008B00;" ';
			}

			if($getotlist['ot_timeName'] == "กะเช้า(ก่อนเข้างาน)"){
				$ot_timename = "กะเช้า (ก่อนเข้างาน 06.00 - 07.15น.)";
			}else if($getotlist['ot_timeName'] == "กะเช้า(หลังเลิกงาน)"){
				$ot_timename = "กะเช้า (หลังเลิกงาน 16.15 - 19.30น.)";
			}else if($getotlist['ot_timeName'] == "กะเย็น(หลังเลิกงาน)") {
				$ot_timename = "กะเย็น (หลังเลิกงาน 04.15 - 07.30น.)";
			}else{
				$ot_timename = "";
			}
			?>
			<tr>
                <td></td>
				<td>
					<?= $getotlist['ot_code'] ?>
				</td>
				<td>
					<?= $getotlist['ot_empFname'] . "&nbsp;" . $getotlist['ot_empLname'] ?>
				</td>
				<td>
					<?= $getotlist['ot_empCode'] ?>
				</td>
				<td>
					<?= $getotlist['ot_empPosition'] ?>
				</td>
				<td>
					<?= $ot_timename ?>
				</td>
				<td>
					<?= conDate($getotlist['ot_date_request']) ?>
				</td>
				<td>
					<span <?= $colorFont ?>>
						<?= $getotlist['ot_status'] ?>
					</span>

                </td>
                <!-- <td><input type="checkbox" class="get_value" name="select_approve[]" id="select_approve" value="<?= $getotlist['ot_empCode'] ?>"></td> -->
			</tr>
		<?php } ?>
                    </tbody>
				</table>
				</div>