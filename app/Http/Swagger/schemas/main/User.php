<?php

// Schema client


/**
 * @OA\Schema(
 *   schema="User",
 *   required={"base_url", "status", "message", "data"},
 *   type="object",
 * * @OA\Property(
 *         property="base_url",
 *         type="string",
 *         format="url"
 *     ),
 * *  @OA\Property(
 *         property="status",
 *         type="boolean",
 *     ),
 * *  @OA\Property(
 *         property="message",
 *         type="string"
 *     ),
 *    @OA\Property(
 *        property="data",
 *        type="object",
*         ref="#/components/schemas/User"
 *    ),
 * )
**/
