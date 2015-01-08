<?php 
	class SiteTreeCacheExtension extends DataExtension {
	public function onBeforeVersionedPublish($fromStage, $toStage, $createNewVersion) {
		SiteTree::clearIsOrphanedCache();
		SiteTree::clearCanViewCache();
	}

	public function onBeforeWrite() {
		SiteTree::clearIsOrphanedCache();
		SiteTree::clearCanViewCache();
	}
}