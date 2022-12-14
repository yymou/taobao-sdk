<?php

/**
 * 商品类目结构
 * @author auto create
 */
class ItemCat
{
	
	/** 
	 * 商品所属类目ID
	 **/
	public $cid;
	
	/** 
	 * Feature对象列表目前已有的属性：若Attr_key为 udsaleprop，attr_value为1 则允许卖家在改类目新增自定义销售属性,不然为不允许
	 **/
	public $features;
	
	/** 
	 * 该类目是否为父类目(即：该类目是否还有子类目)
	 **/
	public $is_parent;
	
	/** 
	 * 类目名称
	 **/
	public $name;
	
	/** 
	 * 父类目ID=0时，代表的是一级的类目
	 **/
	public $parent_cid;
	
	/** 
	 * 排列序号，表示同级类目的展现次序，如数值相等则按名称次序排列。取值范围:大于零的整数
	 **/
	public $sort_order;
	
	/** 
	 * 状态。可选值:normal(正常),deleted(删除)
	 **/
	public $status;
	
	/** 
	 * 是否度量衡类目
	 **/
	public $taosir_cat;	
}
?>