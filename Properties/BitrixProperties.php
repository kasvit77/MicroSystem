<?php


namespace App\Console\Commands\Properties;
use App\Models\BitrixProperty;
use App\Models\BitrixSection;
use App\Models\CompareBlockProperty;
use Illuminate\Support\Facades\DB;

class BitrixProperties
{
    public $properties;
    //$selectQuery = 'SELECT DISTINCT  FPS0.PROPERTY_124 as PROPERTY_124_VALUE, concat(BE.ID , \':\' , 124) as PROPERTY_124_VALUE_ID, FPS0.PROPERTY_126 as PROPERTY_126_VALUE, FPS0.PROPERTY_128 as PROPERTY_128_VALUE, FPS0.DESCRIPTION_128 as PROPERTY_128_DESCRIPTION, FPS0.PROPERTY_129 as PROPERTY_129_VALUE, FPS0.DESCRIPTION_129 as PROPERTY_129_DESCRIPTION, FPS0.PROPERTY_135 as PROPERTY_135_VALUE, FPS0.DESCRIPTION_135 as PROPERTY_135_DESCRIPTION, concat(BE.ID , \':\' , 135) as PROPERTY_135_VALUE_ID, FPS0.PROPERTY_202 as PROPERTY_202_VALUE, FPS0.PROPERTY_204 as PROPERTY_204_VALUE, FPEN0.VALUE as PROPERTY_205_VALUE, FPEN0.ID as PROPERTY_205_ENUM_ID, concat(BE.ID , \':\' , 205) as PROPERTY_205_VALUE_ID, FPS0.PROPERTY_206 as PROPERTY_206_VALUE, concat(BE.ID , \':\' , 206) as PROPERTY_206_VALUE_ID, FPS0.PROPERTY_208 as PROPERTY_208_VALUE, concat(BE.ID , \':\' , 208) as PROPERTY_208_VALUE_ID, FPEN1.VALUE as PROPERTY_209_VALUE, FPEN1.ID as PROPERTY_209_ENUM_ID, concat(BE.ID , \':\' , 209) as PROPERTY_209_VALUE_ID, FPS0.PROPERTY_210 as PROPERTY_210_VALUE, FPS0.PROPERTY_211 as PROPERTY_211_VALUE, concat(BE.ID , \':\' , 211) as PROPERTY_211_VALUE_ID, FPS0.PROPERTY_212 as PROPERTY_212_VALUE, concat(BE.ID , \':\' , 212) as PROPERTY_212_VALUE_ID, FPS0.PROPERTY_213 as PROPERTY_213_VALUE, concat(BE.ID , \':\' , 213) as PROPERTY_213_VALUE_ID, FPS0.PROPERTY_214 as PROPERTY_214_VALUE, concat(BE.ID , \':\' , 214) as PROPERTY_214_VALUE_ID, FPS0.PROPERTY_215 as PROPERTY_215_VALUE, FPEN2.VALUE as PROPERTY_216_VALUE, FPEN2.ID as PROPERTY_216_ENUM_ID, concat(BE.ID , \':\' , 216) as PROPERTY_216_VALUE_ID, FPS0.PROPERTY_218 as PROPERTY_218_VALUE, concat(BE.ID , \':\' , 218) as PROPERTY_218_VALUE_ID, FPEN3.VALUE as PROPERTY_220_VALUE, FPEN3.ID as PROPERTY_220_ENUM_ID, concat(BE.ID , \':\' , 220) as PROPERTY_220_VALUE_ID, FPS0.PROPERTY_221 as PROPERTY_221_VALUE, concat(BE.ID , \':\' , 221) as PROPERTY_221_VALUE_ID, FPS0.PROPERTY_222 as PROPERTY_222_VALUE, concat(BE.ID , \':\' , 222) as PROPERTY_222_VALUE_ID, FPS0.PROPERTY_224 as PROPERTY_224_VALUE, concat(BE.ID , \':\' , 224) as PROPERTY_224_VALUE_ID, FPS0.PROPERTY_231 as PROPERTY_231_VALUE, concat(BE.ID , \':\' , 231) as PROPERTY_231_VALUE_ID, FPS0.PROPERTY_245 as PROPERTY_245_VALUE, FPS0.PROPERTY_246 as PROPERTY_246_VALUE, concat(BE.ID , \':\' , 246) as PROPERTY_246_VALUE_ID, FPS0.PROPERTY_247 as PROPERTY_247_VALUE, FPS0.PROPERTY_248 as PROPERTY_248_VALUE, concat(BE.ID , \':\' , 248) as PROPERTY_248_VALUE_ID, FPS0.PROPERTY_249 as PROPERTY_249_VALUE, concat(BE.ID , \':\' , 249) as PROPERTY_249_VALUE_ID, FPS0.PROPERTY_250 as PROPERTY_250_VALUE, concat(BE.ID , \':\' , 250) as PROPERTY_250_VALUE_ID, FPS0.PROPERTY_251 as PROPERTY_251_VALUE, FPS0.PROPERTY_252 as PROPERTY_252_VALUE, FPS0.PROPERTY_253 as PROPERTY_253_VALUE, concat(BE.ID , \':\' , 253) as PROPERTY_253_VALUE_ID, FPS0.PROPERTY_254 as PROPERTY_254_VALUE, FPS0.PROPERTY_255 as PROPERTY_255_VALUE, concat(BE.ID , \':\' , 255) as PROPERTY_255_VALUE_ID, FPS0.PROPERTY_256 as PROPERTY_256_VALUE, concat(BE.ID , \':\' , 256) as PROPERTY_256_VALUE_ID, FPS0.PROPERTY_257 as PROPERTY_257_VALUE, concat(BE.ID , \':\' , 257) as PROPERTY_257_VALUE_ID, FPS0.PROPERTY_258 as PROPERTY_258_VALUE, concat(BE.ID , \':\' , 258) as PROPERTY_258_VALUE_ID, FPS0.PROPERTY_259 as PROPERTY_259_VALUE, concat(BE.ID , \':\' , 259) as PROPERTY_259_VALUE_ID, FPS0.PROPERTY_260 as PROPERTY_260_VALUE, FPS0.PROPERTY_261 as PROPERTY_261_VALUE, FPS0.PROPERTY_262 as PROPERTY_262_VALUE, FPS0.PROPERTY_263 as PROPERTY_263_VALUE, FPS0.PROPERTY_264 as PROPERTY_264_VALUE, concat(BE.ID , \':\' , 264) as PROPERTY_264_VALUE_ID, FPS0.PROPERTY_265 as PROPERTY_265_VALUE, concat(BE.ID , \':\' , 265) as PROPERTY_265_VALUE_ID, FPS0.PROPERTY_267 as PROPERTY_267_VALUE, FPS0.PROPERTY_268 as PROPERTY_268_VALUE, FPS0.PROPERTY_269 as PROPERTY_269_VALUE, concat(BE.ID , \':\' , 269) as PROPERTY_269_VALUE_ID, FPS0.PROPERTY_270 as PROPERTY_270_VALUE, concat(BE.ID , \':\' , 270) as PROPERTY_270_VALUE_ID, FPS0.PROPERTY_272 as PROPERTY_272_VALUE, concat(BE.ID , \':\' , 272) as PROPERTY_272_VALUE_ID, FPEN4.VALUE as PROPERTY_273_VALUE, FPEN4.ID as PROPERTY_273_ENUM_ID, concat(BE.ID , \':\' , 273) as PROPERTY_273_VALUE_ID, FPS0.PROPERTY_274 as PROPERTY_274_VALUE, concat(BE.ID , \':\' , 274) as PROPERTY_274_VALUE_ID, FPEN5.VALUE as PROPERTY_275_VALUE, FPEN5.ID as PROPERTY_275_ENUM_ID, concat(BE.ID , \':\' , 275) as PROPERTY_275_VALUE_ID, FPEN6.VALUE as PROPERTY_276_VALUE, FPEN6.ID as PROPERTY_276_ENUM_ID, concat(BE.ID , \':\' , 276) as PROPERTY_276_VALUE_ID, FPS0.PROPERTY_277 as PROPERTY_277_VALUE, concat(BE.ID , \':\' , 277) as PROPERTY_277_VALUE_ID, FPEN7.VALUE as PROPERTY_278_VALUE, FPEN7.ID as PROPERTY_278_ENUM_ID, concat(BE.ID , \':\' , 278) as PROPERTY_278_VALUE_ID, FPEN8.VALUE as PROPERTY_279_VALUE, FPEN8.ID as PROPERTY_279_ENUM_ID, concat(BE.ID , \':\' , 279) as PROPERTY_279_VALUE_ID, FPS0.PROPERTY_280 as PROPERTY_280_VALUE, FPS0.PROPERTY_281 as PROPERTY_281_VALUE, concat(BE.ID , \':\' , 281) as PROPERTY_281_VALUE_ID, FPS0.PROPERTY_282 as PROPERTY_282_VALUE, FPS0.PROPERTY_283 as PROPERTY_283_VALUE, concat(BE.ID , \':\' , 283) as PROPERTY_283_VALUE_ID, FPS0.PROPERTY_284 as PROPERTY_284_VALUE, concat(BE.ID , \':\' , 284) as PROPERTY_284_VALUE_ID, FPS0.PROPERTY_285 as PROPERTY_285_VALUE, FPS0.PROPERTY_288 as PROPERTY_288_VALUE, concat(BE.ID , \':\' , 288) as PROPERTY_288_VALUE_ID, FPS0.PROPERTY_289 as PROPERTY_289_VALUE, FPS0.PROPERTY_290 as PROPERTY_290_VALUE, FPEN9.VALUE as PROPERTY_291_VALUE, FPEN9.ID as PROPERTY_291_ENUM_ID, concat(BE.ID , \':\' , 291) as PROPERTY_291_VALUE_ID, FPS0.PROPERTY_292 as PROPERTY_292_VALUE, concat(BE.ID , \':\' , 292) as PROPERTY_292_VALUE_ID, FPS0.PROPERTY_293 as PROPERTY_293_VALUE, concat(BE.ID , \':\' , 293) as PROPERTY_293_VALUE_ID, FPS0.PROPERTY_294 as PROPERTY_294_VALUE, FPS0.PROPERTY_295 as PROPERTY_295_VALUE, FPS0.PROPERTY_296 as PROPERTY_296_VALUE, concat(BE.ID , \':\' , 296) as PROPERTY_296_VALUE_ID, FPS0.PROPERTY_297 as PROPERTY_297_VALUE, concat(BE.ID , \':\' , 297) as PROPERTY_297_VALUE_ID, FPS0.PROPERTY_298 as PROPERTY_298_VALUE, concat(BE.ID , \':\' , 298) as PROPERTY_298_VALUE_ID, FPS0.PROPERTY_300 as PROPERTY_300_VALUE, concat(BE.ID , \':\' , 300) as PROPERTY_300_VALUE_ID, FPS0.PROPERTY_301 as PROPERTY_301_VALUE, concat(BE.ID , \':\' , 301) as PROPERTY_301_VALUE_ID, FPS0.PROPERTY_303 as PROPERTY_303_VALUE, FPS0.PROPERTY_304 as PROPERTY_304_VALUE, FPS0.PROPERTY_305 as PROPERTY_305_VALUE, FPS0.PROPERTY_306 as PROPERTY_306_VALUE, FPEN10.VALUE as PROPERTY_307_VALUE, FPEN10.ID as PROPERTY_307_ENUM_ID, concat(BE.ID , \':\' , 307) as PROPERTY_307_VALUE_ID, FPS0.PROPERTY_308 as PROPERTY_308_VALUE, FPS0.PROPERTY_309 as PROPERTY_309_VALUE, concat(BE.ID , \':\' , 309) as PROPERTY_309_VALUE_ID, FPS0.PROPERTY_310 as PROPERTY_310_VALUE, concat(BE.ID , \':\' , 310) as PROPERTY_310_VALUE_ID, FPS0.PROPERTY_311 as PROPERTY_311_VALUE, concat(BE.ID , \':\' , 311) as PROPERTY_311_VALUE_ID, FPS0.PROPERTY_312 as PROPERTY_312_VALUE, FPS0.PROPERTY_315 as PROPERTY_315_VALUE, concat(BE.ID , \':\' , 315) as PROPERTY_315_VALUE_ID, FPS0.PROPERTY_323 as PROPERTY_323_VALUE, FPS0.PROPERTY_324 as PROPERTY_324_VALUE, concat(BE.ID , \':\' , 324) as PROPERTY_324_VALUE_ID, FPS0.PROPERTY_333 as PROPERTY_333_VALUE, concat(BE.ID , \':\' , 333) as PROPERTY_333_VALUE_ID, FPS0.PROPERTY_334 as PROPERTY_334_VALUE, FPEN11.VALUE as PROPERTY_336_VALUE, FPEN11.ID as PROPERTY_336_ENUM_ID, concat(BE.ID , \':\' , 336) as PROPERTY_336_VALUE_ID, FPEN12.VALUE as PROPERTY_337_VALUE, FPEN12.ID as PROPERTY_337_ENUM_ID, concat(BE.ID , \':\' , 337) as PROPERTY_337_VALUE_ID, FPEN13.VALUE as PROPERTY_339_VALUE, FPEN13.ID as PROPERTY_339_ENUM_ID, concat(BE.ID , \':\' , 339) as PROPERTY_339_VALUE_ID, FPEN14.VALUE as PROPERTY_340_VALUE, FPEN14.ID as PROPERTY_340_ENUM_ID, concat(BE.ID , \':\' , 340) as PROPERTY_340_VALUE_ID, FPS0.PROPERTY_341 as PROPERTY_341_VALUE, FPS0.PROPERTY_344 as PROPERTY_344_VALUE, FPS0.PROPERTY_345 as PROPERTY_345_VALUE, FPEN15.VALUE as PROPERTY_346_VALUE, FPEN15.ID as PROPERTY_346_ENUM_ID, concat(BE.ID , \':\' , 346) as PROPERTY_346_VALUE_ID, FPEN16.VALUE as PROPERTY_347_VALUE, FPEN16.ID as PROPERTY_347_ENUM_ID, concat(BE.ID , \':\' , 347) as PROPERTY_347_VALUE_ID, FPEN17.VALUE as PROPERTY_348_VALUE, FPEN17.ID as PROPERTY_348_ENUM_ID, concat(BE.ID , \':\' , 348) as PROPERTY_348_VALUE_ID, FPS0.PROPERTY_349 as PROPERTY_349_VALUE, FPEN18.VALUE as PROPERTY_351_VALUE, FPEN18.ID as PROPERTY_351_ENUM_ID, concat(BE.ID , \':\' , 351) as PROPERTY_351_VALUE_ID, FPEN19.VALUE as PROPERTY_352_VALUE, FPEN19.ID as PROPERTY_352_ENUM_ID, concat(BE.ID , \':\' , 352) as PROPERTY_352_VALUE_ID, FPEN20.VALUE as PROPERTY_353_VALUE, FPEN20.ID as PROPERTY_353_ENUM_ID, concat(BE.ID , \':\' , 353) as PROPERTY_353_VALUE_ID, FPEN21.VALUE as PROPERTY_355_VALUE, FPEN21.ID as PROPERTY_355_ENUM_ID, concat(BE.ID , \':\' , 355) as PROPERTY_355_VALUE_ID, FPEN22.VALUE as PROPERTY_356_VALUE, FPEN22.ID as PROPERTY_356_ENUM_ID, concat(BE.ID , \':\' , 356) as PROPERTY_356_VALUE_ID, FPEN23.VALUE as PROPERTY_357_VALUE, FPEN23.ID as PROPERTY_357_ENUM_ID, concat(BE.ID , \':\' , 357) as PROPERTY_357_VALUE_ID, FPS0.PROPERTY_358 as PROPERTY_358_VALUE, FPS0.PROPERTY_359 as PROPERTY_359_VALUE, FPEN24.VALUE as PROPERTY_360_VALUE, FPEN24.ID as PROPERTY_360_ENUM_ID, concat(BE.ID , \':\' , 360) as PROPERTY_360_VALUE_ID, FPEN25.VALUE as PROPERTY_361_VALUE, FPEN25.ID as PROPERTY_361_ENUM_ID, concat(BE.ID , \':\' , 361) as PROPERTY_361_VALUE_ID, FPEN26.VALUE as PROPERTY_362_VALUE, FPEN26.ID as PROPERTY_362_ENUM_ID, concat(BE.ID , \':\' , 362) as PROPERTY_362_VALUE_ID, FPEN27.VALUE as PROPERTY_363_VALUE, FPEN27.ID as PROPERTY_363_ENUM_ID, concat(BE.ID , \':\' , 363) as PROPERTY_363_VALUE_ID, FPEN28.VALUE as PROPERTY_364_VALUE, FPEN28.ID as PROPERTY_364_ENUM_ID, concat(BE.ID , \':\' , 364) as PROPERTY_364_VALUE_ID, FPS0.PROPERTY_365 as PROPERTY_365_VALUE, FPEN29.VALUE as PROPERTY_366_VALUE, FPEN29.ID as PROPERTY_366_ENUM_ID, concat(BE.ID , \':\' , 366) as PROPERTY_366_VALUE_ID, FPEN30.VALUE as PROPERTY_367_VALUE, FPEN30.ID as PROPERTY_367_ENUM_ID, concat(BE.ID , \':\' , 367) as PROPERTY_367_VALUE_ID, FPS0.PROPERTY_368 as PROPERTY_368_VALUE, FPS0.PROPERTY_369 as PROPERTY_369_VALUE, FPEN31.VALUE as PROPERTY_370_VALUE, FPEN31.ID as PROPERTY_370_ENUM_ID, concat(BE.ID , \':\' , 370) as PROPERTY_370_VALUE_ID, FPS0.PROPERTY_371 as PROPERTY_371_VALUE, FPEN32.VALUE as PROPERTY_372_VALUE, FPEN32.ID as PROPERTY_372_ENUM_ID, concat(BE.ID , \':\' , 372) as PROPERTY_372_VALUE_ID, FPEN33.VALUE as PROPERTY_375_VALUE, FPEN33.ID as PROPERTY_375_ENUM_ID, concat(BE.ID , \':\' , 375) as PROPERTY_375_VALUE_ID, FPEN34.VALUE as PROPERTY_376_VALUE, FPEN34.ID as PROPERTY_376_ENUM_ID, concat(BE.ID , \':\' , 376) as PROPERTY_376_VALUE_ID, FPS0.PROPERTY_377 as PROPERTY_377_VALUE, FPS0.PROPERTY_380 as PROPERTY_380_VALUE, FPEN35.VALUE as PROPERTY_381_VALUE, FPEN35.ID as PROPERTY_381_ENUM_ID, concat(BE.ID , \':\' , 381) as PROPERTY_381_VALUE_ID, FPEN36.VALUE as PROPERTY_382_VALUE, FPEN36.ID as PROPERTY_382_ENUM_ID, concat(BE.ID , \':\' , 382) as PROPERTY_382_VALUE_ID, FPEN37.VALUE as PROPERTY_383_VALUE, FPEN37.ID as PROPERTY_383_ENUM_ID, concat(BE.ID , \':\' , 383) as PROPERTY_383_VALUE_ID, FPEN38.VALUE as PROPERTY_384_VALUE, FPEN38.ID as PROPERTY_384_ENUM_ID, concat(BE.ID , \':\' , 384) as PROPERTY_384_VALUE_ID, FPEN39.VALUE as PROPERTY_385_VALUE, FPEN39.ID as PROPERTY_385_ENUM_ID, concat(BE.ID , \':\' , 385) as PROPERTY_385_VALUE_ID, FPS0.PROPERTY_386 as PROPERTY_386_VALUE, FPEN40.VALUE as PROPERTY_387_VALUE, FPEN40.ID as PROPERTY_387_ENUM_ID, concat(BE.ID , \':\' , 387) as PROPERTY_387_VALUE_ID, FPEN41.VALUE as PROPERTY_388_VALUE, FPEN41.ID as PROPERTY_388_ENUM_ID, concat(BE.ID , \':\' , 388) as PROPERTY_388_VALUE_ID, FPEN42.VALUE as PROPERTY_389_VALUE, FPEN42.ID as PROPERTY_389_ENUM_ID, concat(BE.ID , \':\' , 389) as PROPERTY_389_VALUE_ID, FPS0.PROPERTY_391 as PROPERTY_391_VALUE, FPEN43.VALUE as PROPERTY_392_VALUE, FPEN43.ID as PROPERTY_392_ENUM_ID, concat(BE.ID , \':\' , 392) as PROPERTY_392_VALUE_ID, FPS0.PROPERTY_393 as PROPERTY_393_VALUE, FPEN44.VALUE as PROPERTY_394_VALUE, FPEN44.ID as PROPERTY_394_ENUM_ID, concat(BE.ID , \':\' , 394) as PROPERTY_394_VALUE_ID, FPEN45.VALUE as PROPERTY_395_VALUE, FPEN45.ID as PROPERTY_395_ENUM_ID, concat(BE.ID , \':\' , 395) as PROPERTY_395_VALUE_ID, FPEN46.VALUE as PROPERTY_396_VALUE, FPEN46.ID as PROPERTY_396_ENUM_ID, concat(BE.ID , \':\' , 396) as PROPERTY_396_VALUE_ID, FPS0.PROPERTY_398 as PROPERTY_398_VALUE, FPEN47.VALUE as PROPERTY_399_VALUE, FPEN47.ID as PROPERTY_399_ENUM_ID, concat(BE.ID , \':\' , 399) as PROPERTY_399_VALUE_ID, FPS0.PROPERTY_400 as PROPERTY_400_VALUE, FPEN48.VALUE as PROPERTY_401_VALUE, FPEN48.ID as PROPERTY_401_ENUM_ID, concat(BE.ID , \':\' , 401) as PROPERTY_401_VALUE_ID,CAT_PR.QUANTITY as CATALOG_QUANTITY, CAT_PR.QUANTITY_RESERVED as CATALOG_QUANTITY_RESERVED,  IF (CAT_PR.QUANTITY_TRACE = \'D\', \'N\', CAT_PR.QUANTITY_TRACE) as CATALOG_QUANTITY_TRACE,  CAT_PR.QUANTITY_TRACE as CATALOG_QUANTITY_TRACE_ORIG,  IF (CAT_PR.CAN_BUY_ZERO = \'D\', \'Y\', CAT_PR.CAN_BUY_ZERO) as CATALOG_CAN_BUY_ZERO,  CAT_PR.CAN_BUY_ZERO as CATALOG_CAN_BUY_ZERO_ORIG,  IF (CAT_PR.NEGATIVE_AMOUNT_TRACE = \'D\', \'Y\', CAT_PR.NEGATIVE_AMOUNT_TRACE) as CATALOG_NEGATIVE_AMOUNT_TRACE,  CAT_PR.NEGATIVE_AMOUNT_TRACE as CATALOG_NEGATIVE_AMOUNT_ORIG,  IF (CAT_PR.SUBSCRIBE = \'D\', \'Y\', CAT_PR.SUBSCRIBE) as CATALOG_SUBSCRIBE,  CAT_PR.SUBSCRIBE as CATALOG_SUBSCRIBE_ORIG,  CAT_PR.AVAILABLE as CATALOG_AVAILABLE,  CAT_PR.WEIGHT as CATALOG_WEIGHT, CAT_PR.WIDTH as CATALOG_WIDTH, CAT_PR.LENGTH as CATALOG_LENGTH, CAT_PR.HEIGHT as CATALOG_HEIGHT,  CAT_PR.MEASURE as CATALOG_MEASURE,  CAT_VAT.RATE as CATALOG_VAT, CAT_PR.VAT_ID as CATALOG_VAT_ID, CAT_PR.VAT_INCLUDED as CATALOG_VAT_INCLUDED,  CAT_PR.PRICE_TYPE as CATALOG_PRICE_TYPE, CAT_PR.RECUR_SCHEME_TYPE as CATALOG_RECUR_SCHEME_TYPE,  CAT_PR.RECUR_SCHEME_LENGTH as CATALOG_RECUR_SCHEME_LENGTH, CAT_PR.TRIAL_PRICE_ID as CATALOG_TRIAL_PRICE_ID,  CAT_PR.WITHOUT_ORDER as CATALOG_WITHOUT_ORDER, CAT_PR.SELECT_BEST_PRICE as CATALOG_SELECT_BEST_PRICE,  CAT_PR.PURCHASING_PRICE as CATALOG_PURCHASING_PRICE, CAT_PR.PURCHASING_CURRENCY as CATALOG_PURCHASING_CURRENCY,  CAT_PR.TYPE as CATALOG_TYPE, CAT_PR.BUNDLE as CATALOG_BUNDLE     FROM b_iblock B INNER JOIN b_lang L ON B.LID=L.LID INNER JOIN b_iblock_element BE ON BE.IBLOCK_ID = B.ID INNER JOIN b_iblock_element_prop_s17 FPS0 ON FPS0.IBLOCK_ELEMENT_ID = BE.ID      LEFT JOIN b_iblock_property_enum FPEN0 ON FPEN0.PROPERTY_ID = 205 AND FPS0.PROPERTY_205 = FPEN0.ID LEFT JOIN b_iblock_property_enum FPEN1 ON FPEN1.PROPERTY_ID = 209 AND FPS0.PROPERTY_209 = FPEN1.ID LEFT JOIN b_iblock_property_enum FPEN2 ON FPEN2.PROPERTY_ID = 216 AND FPS0.PROPERTY_216 = FPEN2.ID LEFT JOIN b_iblock_property_enum FPEN3 ON FPEN3.PROPERTY_ID = 220 AND FPS0.PROPERTY_220 = FPEN3.ID LEFT JOIN b_iblock_property_enum FPEN4 ON FPEN4.PROPERTY_ID = 273 AND FPS0.PROPERTY_273 = FPEN4.ID LEFT JOIN b_iblock_property_enum FPEN5 ON FPEN5.PROPERTY_ID = 275 AND FPS0.PROPERTY_275 = FPEN5.ID LEFT JOIN b_iblock_property_enum FPEN6 ON FPEN6.PROPERTY_ID = 276 AND FPS0.PROPERTY_276 = FPEN6.ID LEFT JOIN b_iblock_property_enum FPEN7 ON FPEN7.PROPERTY_ID = 278 AND FPS0.PROPERTY_278 = FPEN7.ID LEFT JOIN b_iblock_property_enum FPEN8 ON FPEN8.PROPERTY_ID = 279 AND FPS0.PROPERTY_279 = FPEN8.ID LEFT JOIN b_iblock_property_enum FPEN9 ON FPEN9.PROPERTY_ID = 291 AND FPS0.PROPERTY_291 = FPEN9.ID LEFT JOIN b_iblock_property_enum FPEN10 ON FPEN10.PROPERTY_ID = 307 AND FPS0.PROPERTY_307 = FPEN10.ID LEFT JOIN b_iblock_property_enum FPEN11 ON FPEN11.PROPERTY_ID = 336 AND FPS0.PROPERTY_336 = FPEN11.ID LEFT JOIN b_iblock_property_enum FPEN12 ON FPEN12.PROPERTY_ID = 337 AND FPS0.PROPERTY_337 = FPEN12.ID LEFT JOIN b_iblock_property_enum FPEN13 ON FPEN13.PROPERTY_ID = 339 AND FPS0.PROPERTY_339 = FPEN13.ID LEFT JOIN b_iblock_property_enum FPEN14 ON FPEN14.PROPERTY_ID = 340 AND FPS0.PROPERTY_340 = FPEN14.ID LEFT JOIN b_iblock_property_enum FPEN15 ON FPEN15.PROPERTY_ID = 346 AND FPS0.PROPERTY_346 = FPEN15.ID LEFT JOIN b_iblock_property_enum FPEN16 ON FPEN16.PROPERTY_ID = 347 AND FPS0.PROPERTY_347 = FPEN16.ID LEFT JOIN b_iblock_property_enum FPEN17 ON FPEN17.PROPERTY_ID = 348 AND FPS0.PROPERTY_348 = FPEN17.ID LEFT JOIN b_iblock_property_enum FPEN18 ON FPEN18.PROPERTY_ID = 351 AND FPS0.PROPERTY_351 = FPEN18.ID LEFT JOIN b_iblock_property_enum FPEN19 ON FPEN19.PROPERTY_ID = 352 AND FPS0.PROPERTY_352 = FPEN19.ID LEFT JOIN b_iblock_property_enum FPEN20 ON FPEN20.PROPERTY_ID = 353 AND FPS0.PROPERTY_353 = FPEN20.ID LEFT JOIN b_iblock_property_enum FPEN21 ON FPEN21.PROPERTY_ID = 355 AND FPS0.PROPERTY_355 = FPEN21.ID LEFT JOIN b_iblock_property_enum FPEN22 ON FPEN22.PROPERTY_ID = 356 AND FPS0.PROPERTY_356 = FPEN22.ID LEFT JOIN b_iblock_property_enum FPEN23 ON FPEN23.PROPERTY_ID = 357 AND FPS0.PROPERTY_357 = FPEN23.ID LEFT JOIN b_iblock_property_enum FPEN24 ON FPEN24.PROPERTY_ID = 360 AND FPS0.PROPERTY_360 = FPEN24.ID LEFT JOIN b_iblock_property_enum FPEN25 ON FPEN25.PROPERTY_ID = 361 AND FPS0.PROPERTY_361 = FPEN25.ID LEFT JOIN b_iblock_property_enum FPEN26 ON FPEN26.PROPERTY_ID = 362 AND FPS0.PROPERTY_362 = FPEN26.ID LEFT JOIN b_iblock_property_enum FPEN27 ON FPEN27.PROPERTY_ID = 363 AND FPS0.PROPERTY_363 = FPEN27.ID LEFT JOIN b_iblock_property_enum FPEN28 ON FPEN28.PROPERTY_ID = 364 AND FPS0.PROPERTY_364 = FPEN28.ID LEFT JOIN b_iblock_property_enum FPEN29 ON FPEN29.PROPERTY_ID = 366 AND FPS0.PROPERTY_366 = FPEN29.ID LEFT JOIN b_iblock_property_enum FPEN30 ON FPEN30.PROPERTY_ID = 367 AND FPS0.PROPERTY_367 = FPEN30.ID LEFT JOIN b_iblock_property_enum FPEN31 ON FPEN31.PROPERTY_ID = 370 AND FPS0.PROPERTY_370 = FPEN31.ID LEFT JOIN b_iblock_property_enum FPEN32 ON FPEN32.PROPERTY_ID = 372 AND FPS0.PROPERTY_372 = FPEN32.ID LEFT JOIN b_iblock_property_enum FPEN33 ON FPEN33.PROPERTY_ID = 375 AND FPS0.PROPERTY_375 = FPEN33.ID LEFT JOIN b_iblock_property_enum FPEN34 ON FPEN34.PROPERTY_ID = 376 AND FPS0.PROPERTY_376 = FPEN34.ID LEFT JOIN b_iblock_property_enum FPEN35 ON FPEN35.PROPERTY_ID = 381 AND FPS0.PROPERTY_381 = FPEN35.ID LEFT JOIN b_iblock_property_enum FPEN36 ON FPEN36.PROPERTY_ID = 382 AND FPS0.PROPERTY_382 = FPEN36.ID LEFT JOIN b_iblock_property_enum FPEN37 ON FPEN37.PROPERTY_ID = 383 AND FPS0.PROPERTY_383 = FPEN37.ID LEFT JOIN b_iblock_property_enum FPEN38 ON FPEN38.PROPERTY_ID = 384 AND FPS0.PROPERTY_384 = FPEN38.ID LEFT JOIN b_iblock_property_enum FPEN39 ON FPEN39.PROPERTY_ID = 385 AND FPS0.PROPERTY_385 = FPEN39.ID LEFT JOIN b_iblock_property_enum FPEN40 ON FPEN40.PROPERTY_ID = 387 AND FPS0.PROPERTY_387 = FPEN40.ID LEFT JOIN b_iblock_property_enum FPEN41 ON FPEN41.PROPERTY_ID = 388 AND FPS0.PROPERTY_388 = FPEN41.ID LEFT JOIN b_iblock_property_enum FPEN42 ON FPEN42.PROPERTY_ID = 389 AND FPS0.PROPERTY_389 = FPEN42.ID LEFT JOIN b_iblock_property_enum FPEN43 ON FPEN43.PROPERTY_ID = 392 AND FPS0.PROPERTY_392 = FPEN43.ID LEFT JOIN b_iblock_property_enum FPEN44 ON FPEN44.PROPERTY_ID = 394 AND FPS0.PROPERTY_394 = FPEN44.ID LEFT JOIN b_iblock_property_enum FPEN45 ON FPEN45.PROPERTY_ID = 395 AND FPS0.PROPERTY_395 = FPEN45.ID LEFT JOIN b_iblock_property_enum FPEN46 ON FPEN46.PROPERTY_ID = 396 AND FPS0.PROPERTY_396 = FPEN46.ID LEFT JOIN b_iblock_property_enum FPEN47 ON FPEN47.PROPERTY_ID = 399 AND FPS0.PROPERTY_399 = FPEN47.ID LEFT JOIN b_iblock_property_enum FPEN48 ON FPEN48.PROPERTY_ID = 401 AND FPS0.PROPERTY_401 = FPEN48.ID                  INNER JOIN (                          SELECT DISTINCT BSE.IBLOCK_ELEMENT_ID                          FROM b_iblock_section_element BSE                           INNER JOIN b_iblock_section BS ON BSE.IBLOCK_SECTION_ID = BS.ID  WHERE ((BS.ACTIVE = \'Y\') AND (BS.GLOBAL_ACTIVE = \'Y\'))) BES ON BES.IBLOCK_ELEMENT_ID = BE.ID                         INNER JOIN b_iblock_17_index FC on FC.ELEMENT_ID = BE.ID       left join b_catalog_product CAT_PR on (CAT_PR.ID = BE.ID)  left join b_catalog_iblock CAT_IB on ((CAT_PR.VAT_ID IS NULL OR CAT_PR.VAT_ID = 0) AND CAT_IB.IBLOCK_ID = BE.IBLOCK_ID)  left join b_catalog_vat CAT_VAT on (CAT_VAT.ID = IF((CAT_PR.VAT_ID IS NULL OR CAT_PR.VAT_ID = 0), CAT_IB.VAT_ID, CAT_PR.VAT_ID)) WHERE ((FC.FACET_ID = 1 AND FC.VALUE_NUM = 0 AND FC.VALUE in (0)) AND ((((BE.IBLOCK_ID = 17))))AND ((((CAT_PR.AVAILABLE=\'Y\'))))AND ((((BE.ACTIVE=\'Y\')))))AND (((BE.WF_STATUS_ID=1 AND BE.WF_PARENT_ELEMENT_ID IS NULL))) ';





    public function getBitrixProperties()
    {
        $selectQuery='SELECT * FROM bitrix_properties';
            return  DB::Connection("mysql2")->select($selectQuery);

    }
    /**
     * Стучимся напрямую в БД, ибо на%#@% этот тормозной Bitrix
     *
     * @param BitrixProperty[]|CompareBlockProperty[] $properties
     * @return \Illuminate\Database\Query\Builder
     */
    public static function getQueryForProducts($properties, $categories)
    {
        $responseRaw = \DB::connection('mysql2')
            ->table('b_iblock_element as BE')// Таблица товаров
            ->addSelect(['BE.ID', 'BE.NAME', 'CAT_PR.QUANTITY', 'IB.CANONICAL_PAGE_URL'])// Получаем ID, название, кол-во и шаблон канонической ссылки
            ->addSelect(['BE.CODE', 'BE.IBLOCK_SECTION_ID'])
            ->addSelect('BE.ACTIVE')
            ->addSelect(\DB::raw('IF((ISNULL(FPS0.PROPERTY_214) OR FPS0.PROPERTY_214 != \'Y\') AND `CAT_PR`.`QUANTITY` >= 5, ROUND(PR.PRICE * 0.95) - MOD(ROUND(PR.PRICE * 0.95), 10), PR.PRICE) as PRICE'))// Получаем цену товара
            ->addSelect(\DB::raw('CONCAT(\'https://vsestiralnie.com/upload/\', F.SUBDIR, \'/\', F.FILE_NAME) as PREVIEW_IMAGE'))// Получаем нормальную ссылку на Preview картинку
            ->addSelect(\DB::raw('ROUND(FPS0.PROPERTY_238) as MARJA'))// Получаем маржу товара
            ->join('b_iblock_element_prop_s17 as FPS0', 'FPS0.IBLOCK_ELEMENT_ID', '=', 'BE.ID')// Таблица свойств
            ->leftJoin('b_catalog_product as CAT_PR', 'CAT_PR.ID', '=', 'BE.ID')// Таблица каталога
            ->leftJoin('b_iblock as IB', 'IB.ID', '=', 'BE.IBLOCK_ID')// Таблица инфоблока
            ->leftJoin('b_catalog_price as PR', function ($join) { // Таблица цен каталога
                $join->on('PR.PRODUCT_ID', '=', 'BE.ID');
                $join->where('PR.CATALOG_GROUP_ID', '=', '1');
            })
            ->leftJoin('b_file as F', 'BE.DETAIL_PICTURE', '=', 'F.ID')
            ->joinSub('
                    SELECT DISTINCT BSE.IBLOCK_ELEMENT_ID
                    FROM b_iblock_section_element BSE
                    
                    INNER JOIN b_iblock_section BSubS ON BSE.IBLOCK_SECTION_ID = BSubS.ID
                    INNER JOIN b_iblock_section BS ON (BSubS.IBLOCK_ID=BS.IBLOCK_ID
                        AND BSubS.LEFT_MARGIN>=BS.LEFT_MARGIN
                        AND BSubS.RIGHT_MARGIN<=BS.RIGHT_MARGIN)
                    
                    WHERE (BS.ID IN (' . $categories . ')) AND  (BSubS.ACTIVE = \'Y\') AND (BSubS.GLOBAL_ACTIVE = \'Y\')
            ', 'BES', 'BES.IBLOCK_ELEMENT_ID', '=', 'BE.ID');


        /** @var BitrixProperty|CompareBlockProperty $property */
        foreach ($properties as $property) {
            // Получаем значения ENUM, где нет множественного значения
            if ($property->property_type === 'L' && $property->multiple === 0) {
                $pSelect = 'FPEN' . $property->property_id;

                // Таблица с значениями enum для свойства
                $responseRaw->leftJoin('b_iblock_property_enum as ' . $pSelect, function ($join) use ($pSelect, $property) {
                    $join->on('FPS0.PROPERTY_' . $property->property_id, '=', $pSelect . '.ID');
                    $join->where($pSelect . '.PROPERTY_ID', '=', $property->property_id);
                });

                // Выбираем значения
                $responseRaw->addSelect($pSelect . '.VALUE as PROPERTY_' . $property->property_id . '_VALUE');
                $responseRaw->addSelect($pSelect . '.ID as PROPERTY_' . $property->property_id . '_ENUM_ID');
            } else if ($property->property_type === 'E' && $property->multiple === 0) {
                $pSelect = 'FPEN' . $property->property_id;

                $responseRaw->leftJoin('b_iblock_element as ' . $pSelect, $pSelect . '.ID', '=', 'FPS0.PROPERTY_' . $property->property_id);

                $responseRaw->addSelect($pSelect . '.NAME as PROPERTY_' . $property->property_id . '_VALUE');
                $responseRaw->addSelect($pSelect . '.ID as PROPERTY_' . $property->property_id . '_ENUM_ID');
            } else {
                $responseRaw->addSelect('FPS0.PROPERTY_' . $property->property_id . ' as PROPERTY_' . $property->property_id . '_VALUE');
            }
        }

        return $responseRaw;
    }

    /**
     * @param BitrixProperty[]|CompareBlockProperty[] $properties
     * @param array $responseKey
     */
    public static function postQueryProduct($properties, &$responseKey)
    {
        /** @var BitrixProperty|CompareBlockProperty $property */
        foreach ($properties as $property) {
            if ($property->property_type === 'L' && $property->multiple === 1) { // Получаем значения свойства списка с множественным значением
                // Десериализация значения (На%&@@#$ Bitrix, вот н^$%@$я это просто?!)
                $value = unserialize($responseKey['PROPERTY_' . $property->property_id . '_VALUE']);

                if(empty($value['VALUE'])) {
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = [];
                } else {

                    // Получаем значения элементов
                    $responseRaw2 = \DB::connection('mysql2')
                        ->table('b_iblock_property_enum')
                        ->where('PROPERTY_ID', '=', $property->bitrix_id)
                        ->whereIn('ID', $value['VALUE'])
                        ->get();

                    // Создаём новые значения для свойства
                    $valueReal = [];
                    foreach ($responseRaw2 as $responseField) {
                        $valueReal[$responseField->ID] = $responseField->VALUE;
                    }

                    // Устанавливаем новое значение
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = $valueReal;
                }

            } else if ($property->property_type === 'S' && $property->multiple === 1 && $property->userType == 'directory') { // Получаем значения свойства строки с множественным значением (Цвета)
                // Десериализация значения
                $value = unserialize($responseKey['PROPERTY_' . $property->property_id . '_VALUE']);

                if (!empty($value['VALUE'])) {

                    // Достаём настройки пользовательского типа данных
                    $userTypeSettings = json_decode($property->user_type_settings);
                    if (!$userTypeSettings) {
                        continue;
                    }

                    // Получаем значения элементов
                    $responseRaw2 = \DB::connection('mysql2')
                        ->table($userTypeSettings->TABLE_NAME)
                        ->whereIn('UF_XML_ID', $value['VALUE'])
                        ->get();

                    // Создаём новые значения для свойства
                    $valueReal = [];
                    foreach ($responseRaw2 as $responseField) {
                        $valueReal[$responseField->UF_XML_ID] = $responseField->UF_NAME;
                    }

                    // Устанавливаем новое значение
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = $valueReal;
                } else {
                    // Устанавливаем пустое значение
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = [];
                }

            } else if ($property->property_type === 'F' && $property->multiple === 1) { // Получаем файлы
                // Десериализация значения
                $value = unserialize($responseKey['PROPERTY_' . $property->property_id . '_VALUE']);

                if (!empty($value['VALUE'])) {

                    // Получаем файлы по ID
                    $responseRaw2 = \DB::connection('mysql2')
                        ->table('b_file')
                        ->whereIn('ID', $value['VALUE'])
                        ->get();

                    // Создаём новые значения для свойства
                    $valueReal = [];
                    foreach ($responseRaw2 as $responseField) {
                        $valueReal[$responseField->ID] = 'https://vsestiralnie.com/upload/' . $responseField->SUBDIR . '/' . $responseField->FILE_NAME;
                    }

                    // Устанавливаем новое значение
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = $valueReal;
                } else {
                    // Устанавливаем пустое значение
                    $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] = [];
                }
            } else if ($property->property_type === 'N' && $property->multiple === 0) {
                // https://stackoverflow.com/questions/14531679/remove-useless-zero-digits-from-decimals-in-php
                $responseKey['PROPERTY_' . $property->property_id . '_VALUE'] += 0; // Трюк с превращение в число
            }
        }

        if (isset($responseKey['CANONICAL_PAGE_URL']) && isset($responseKey['CODE']) && isset($responseKey['IBLOCK_SECTION_ID'])) {
            $page_url = str_replace('#SERVER_NAME#', 'vsestiralnie.com', $responseKey['CANONICAL_PAGE_URL']);

            $bitrixSection = BitrixSection::whereBitrixId((int)$responseKey['IBLOCK_SECTION_ID'])->first();

            if ($bitrixSection) {
                $page_url = str_replace('#SECTION_CODE_PATH#', $bitrixSection->full_code_path, $page_url);
                $page_url = str_replace('#ELEMENT_CODE#', $responseKey['CODE'], $page_url);
            }

            $responseKey['CANONICAL_PAGE_URL'] = $page_url;
        }

        if (isset($responseKey['MARJA']) && (int)$responseKey['MARJA'] !== 0) {
            $responseKey['MARJA'] = round(($responseKey['MARJA'] - 600 - 200) * 9 / 100 / 50) * 50;
        }
    }

}