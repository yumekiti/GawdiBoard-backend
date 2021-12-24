<?php
/**
* @OA\Parameter(
*   parameter="offer_get_single",
*   name="offer_id",
*   in="query",
*   required=true,
*   description="募集のid",
* ),
*/

/**
 * @OA\Parameter(
 *   parameter="offer_get_list_tag_ids",
 *   name="offer_tag_ids[]",
 *   in="query",
 *   required=true,
 *   @OA\Schema(
 *        type="array",
 *        @OA\Items(type="integer")
 *   ),
 *   description="募集タグのidの配列",
 * ),
 */

/**
 * @OA\Parameter(
 *   parameter="offer_get_list_page",
 *   name="page",
 *   in="query",
 *   required=true,
 *   description="ページ番号 default 1",
 * ),
 */

/**
 * @OA\RequestBody(
 *   request="post_offer_request_body",
 *   required=true,
 *   @OA\JsonContent(
 *       required={"title", "user_class", "end_date"},
 *       @OA\Property(
 *           property="title",
 *           type="string",
 *           description="募集のタイトル"
 *       ),
 *       @OA\Property(
 *           property="target",
 *           type="string",
 *           description="募集の対象者"
 *       ),
 *       @OA\Property(
 *           property="job",
 *           type="string",
 *           description="役職ごとの募集人数"
 *       ),
 *       @OA\Property(
 *           property="note",
 *           type="string",
 *           description="募集の備考"
 *       ),
 *       @OA\Property(
 *           property="picture",
 *           type="string",
 *           description="募集の画像"
 *       ),
 *       @OA\Property(
 *           property="link",
 *           type="string",
 *           description="募集の参考サイト"
 *       ),
 *       @OA\Property(
 *           property="user_class",
 *           type="string",
 *           description="募集主のクラス"
 *       ),
 *       @OA\Property(
 *           property="end_date",
 *           type="date",
 *           description="募集の掲載終了日"
 *       ),
 *       @OA\Property(
 *           property="offer_tag_ids",
 *           type="array",
 *           description="募集タグのidの配列",
 *           @OA\Items(
 *               type="number",
 *           ),
 *       ),
 *   ),
 * ),
 */

/**
 * @OA\RequestBody(
 *   request="edit_offer_request_body",
 *   required=true,
 *   @OA\JsonContent(
 *       required={"offer_id"},
 *       @OA\Property(
 *           property="offer_id",
 *           type="number",
 *           description="募集のid"
 *       ),
 *       @OA\Property(
 *           property="title",
 *           type="string",
 *           description="募集のタイトル"
 *       ),
 *       @OA\Property(
 *           property="target",
 *           type="string",
 *           description="募集の対象者"
 *       ),
 *       @OA\Property(
 *           property="job",
 *           type="string",
 *           description="役職ごとの募集人数"
 *       ),
 *       @OA\Property(
 *           property="note",
 *           type="string",
 *           description="募集の備考"
 *       ),
 *       @OA\Property(
 *           property="picture",
 *           type="string",
 *           description="募集の画像"
 *       ),
 *       @OA\Property(
 *           property="link",
 *           type="string",
 *           description="募集の参考サイト"
 *       ),
 *       @OA\Property(
 *           property="user_class",
 *           type="string",
 *           description="募集主のクラス"
 *       ),
 *       @OA\Property(
 *           property="end_date",
 *           type="date",
 *           description="募集の掲載終了日"
 *       ),
 *       @OA\Property(
 *           property="offer_tag_ids",
 *           type="array",
 *           description="募集タグのidの配列",
 *           @OA\Items(
 *               type="number",
 *           ),
 *       ),
 *   ),
 * ),
 */

/**
 * @OA\RequestBody(
 *   request="destroy_offer_request_body",
 *   required=true,
 *   @OA\JsonContent(
 *       required={"offer_id"},
 *       @OA\Property(
 *           property="offer_id",
 *           type="number",
 *           description="募集のid"
 *       ),
 *   ),
 * ),
 */

/**
 * @OA\RequestBody(
 *   request="apply_offer_request_body",
 *   required=true,
 *   @OA\JsonContent(
 *       required={"offer_id","interest","user_class","message"},
 *       @OA\Property(
 *           property="offer_id",
 *           type="number",
 *           description="募集のid"
 *       ),
 *       @OA\Property(
 *           property="interest",
 *           type="number",
 *           description="応募者の興味度 (1:高い 2:並 3:低)"
 *       ),
 *       @OA\Property(
 *           property="user_class",
 *           type="string",
 *           description="募集主のクラス"
 *       ),
 *       @OA\Property(
 *           property="message",
 *           type="string",
 *           description="メッセージ"
 *       ),
 *   ),
 * ),
 */
